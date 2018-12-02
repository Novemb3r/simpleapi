<?php
/**
 * Created by PhpStorm.
 * User: kilim
 * Date: 01.12.2018
 * Time: 14:54
 */

class FloydWarshall
{
    /**
     * Number of nodes
     * @var integer
     */
    private $n;

    /**
     * Graph edges
     * @var array
     */
    private $edges;

    /**
     * Distance
     * @var array
     */
    private $dist;

    /**
     * @var array
     */
    private $nxt;

    /**
     * Shortest paths
     * @var array
     */
    private $paths;


    /**
     * FloydWarshall constructor.
     * @param $n
     */
    public function __construct($n)
    {
        $this->n = $n;
        $this->edges = array_fill(0, $this->n, []);
        $this->dist = array_fill(0, $this->n, array_fill(0, $this->n, INF));
        $this->nxt = array_fill(0, $this->n, array_fill(0, $this->n, 0));
        $this->paths = array_fill(0, $this->n, []);;
    }

    /**
     * Make array of edges from file
     * @param $file
     */
    public function make_graph($file)
    {
        include $file; #'ResponseMock.php'
        $t = 0;
        for ($i = 0; $i < 5; ++$i) {
            for ($j = 0; $j < count($building['points'][$i]['relatedPoints']); ++$j) {
                $this->edges[$j + $t][] = $i + 1;
                $this->edges[$j + $t][] = $building['points'][$i]['relatedPoints'][$j];
            }
            $t += count($building['points'][$i]['relatedPoints']);
        }
    }

    /**
     * @param $edges
     */
    public function matrix_create()
    {
        for ($i = 0; $i < $this->n; ++$i)
            $this->dist[$i][$i] = 0;
        foreach ($this->edges as [$s, $d]) {
            $this->dist[$s - 1][$d - 1] = 1;
            $this->nxt[$s - 1][$d - 1] = $d - 1;
        }
    }

    /**
     * Floyd-Warshall algorithm
     */
    public function floyd_warshall()
    {
        for ($i = 0; $i < $this->n; ++$i) {
            for ($j = 0; $j < $this->n; ++$j) {
                for ($k = 0; $k < $this->n; ++$k) {
                    $sum_ik_kj = $this->dist[$i][$k] + $this->dist[$k][$j];
                    if ($this->dist[$i][$j] > $sum_ik_kj) {
                        $this->dist[$i][$j] = $sum_ik_kj;
                        $this->nxt[$i][$j] = $this->nxt[$i][$k];
                    }
                }
            }
        }
        $this->construct_path();
    }

    /**
     * Shortest paths constructor
     */
    private function construct_path()
    {
        for ($i = 0; $i < $this->n; ++$i) {
            for ($j = 0; $j < $this->n; ++$j) {
                $path = [$i];
                while (end($path) != $j) {
                    $path[] = $this->nxt[end($path)][$j];
                }
                if ($i == $j)
                    $path[] = $i;
                $this->paths[$i][] = $path;
            }
        }
    }

    /**
     * Print all shortest paths
     */
    public function print_paths()
    {
        print_r($this->paths);
    }

    /**
     * Print shortest path from point a to point b
     * @param $a
     * @param $b
     *
     * @return
     */
    public function get_path($a, $b)
    {
        $p = $this->paths[$a - 1][$b - 1];
        return $p;
    }
}