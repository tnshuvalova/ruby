<?php

namespace tshuvalova\PerformanceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use tshuvalova\PerformanceBundle\Entity\ProjectTasks;

/**
 * ProjectTasks controller
 *
 */
class ProjectTasksController extends Controller
{
    public function showAction($id = null, $page)
    {
        $em = $this->getDoctrine()->getManager();

        $prj = $em->getRepository('tshuvalovaPerformanceBundle:Project')->find($id);

        if (!$prj) {
            throw $this->createNotFoundException('Unable to find Project entity.');
        }

        $total_tasks = $em->getRepository('tshuvalovaPerformanceBundle:Task')->getCountActiveTasks($prj->getId());
        $tasks_per_page = $this->container->getParameter('max_task_per_page');
        $last_page = ceil($total_tasks / $tasks_per_page);
        $previous_page = $page > 1 ? $page - 1 : 1;
        $next_page = $page < $last_page ? $page + 1 : $last_page;
        $prj->setActiveTasks($em->getRepository('tshuvalovaPerformanceBundle:Task')->getActiveTasks($prj->getId(), $tasks_per_page, ($page - 1) * $tasks_per_page));

        return $this->render('tshuvalovaPerformanceBundle:Project:show.html.twig', array(
            'project' => $prj,
            'last_page' => $last_page,
            'previous_page' => $previous_page,
            'current_page' => $page,
            'next_page' => $next_page,
            'total_tasks' => $total_tasks
        ));
    }
}