<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Model\ProductSearchConditions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ProductController
 * @package AppBundle\Controller
 */
class ProductController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $searchConditions = new ProductSearchConditions();
        $em = $this->getDoctrine()->getManager();
        $searchForm = $this->createSearchForm($searchConditions);
//        var_dump($searchForm);die();
        $paginator = $this->get('knp_paginator');
        $pagination = null;
        $searchForm->handleRequest($request);
        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $pagination = $paginator->paginate(
                $em->getRepository('AppBundle:Product')->getQueryForAdminPagination($searchConditions),
                $request->query->getInt('page', 1),
                15
            );
        }else{
            $pagination = $paginator->paginate(
                $em->getRepository('AppBundle:Product')->getQueryForAdminPagination(),
                $request->query->getInt('page', 1),
                15
            );
        }

        return $this->render('product/index.html.twig', array(
            'form' => $searchForm->createView(),
            'pagination' => $pagination,
        ));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $product = new Product();
        $form = $this->createForm('AppBundle\Form\ProductType', $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('product_show', array('id' => $product->getId()));
        }

        return $this->render('product/new.html.twig', array(
            'product' => $product,
            'form' => $form->createView(),
        ));
    }

    /**
     * @param Product $product
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);

        return $this->render('product/show.html.twig', array(
            'product' => $product,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);
        $editForm = $this->createForm('AppBundle\Form\ProductType', $product);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('product_edit', array('id' => $product->getId()));
        }

        return $this->render('product/edit.html.twig', array(
            'product' => $product,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, Product $product)
    {
        $form = $this->createDeleteForm($product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush();
        }

        return $this->redirectToRoute('product_index');
    }


    /**
     * @param Product $product
     * @return \Symfony\Component\Form\Form
     */
    private function createDeleteForm(Product $product)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('product_delete', array('id' => $product->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    private function createSearchForm(ProductSearchConditions $productSearchConditions)
    {
        return $this->createForm('AppBundle\Form\ProductSearchType', $productSearchConditions, array(
            'method' => 'GET'));
    }
}
