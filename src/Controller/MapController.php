<?php

namespace App\Controller;

use App\Entity\Map;
use App\Form\MapType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/map')]
final class MapController extends AbstractController
{
    #[Route(name: 'app_map_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $maps = $entityManager
            ->getRepository(Map::class)
            ->findAll();

        return $this->render('map/index.html.twig', [
            'maps' => $maps,
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
        if ($this->isCsrfTokenValid('delete'.$map->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($map);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_map_index', [], Response::HTTP_SEE_OTHER);
    }
}
