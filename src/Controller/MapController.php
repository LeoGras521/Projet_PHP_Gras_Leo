<?php

namespace App\Controller;

use App\Entity\Map;
use App\Form\MapType;
use App\Repository\MapRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/map')]
class MapController extends AbstractController
{
    #[Route('/', name: 'app_map_index', methods: ['GET'])]
    public function index(MapRepository $mapRepository): Response
    {
        return $this->render('map/index.html.twig', [
            'maps' => $mapRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_map_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $map = new Map();
        $form = $this->createForm(MapType::class, $map);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($map);
            $entityManager->flush();

            $this->addFlash('success', 'Map créée avec succès !');

            return $this->redirectToRoute('app_map_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('map/new.html.twig', [
            'map' => $map,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_map_show', methods: ['GET'])]
    public function show(Map $map): Response
    {
        return $this->render('map/show.html.twig', [
            'map' => $map,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_map_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Map $map, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MapType::class, $map);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Map modifiée avec succès !');

            return $this->redirectToRoute('app_map_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('map/edit.html.twig', [
            'map' => $map,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_map_delete', methods: ['POST'])]
    public function delete(Request $request, Map $map, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$map->getId(), $request->request->get('_token'))) {
            $entityManager->remove($map);
            $entityManager->flush();

            $this->addFlash('success', 'Map supprimée avec succès !');
        }

        return $this->redirectToRoute('app_map_index', [], Response::HTTP_SEE_OTHER);
    }
}