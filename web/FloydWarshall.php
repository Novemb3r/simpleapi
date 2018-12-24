<?php

include './Paths/paths.php';

class FloydWarshall
{


    /**
     * Graph id
     * @var
     */
    private $id;


    private $a, $b;

    /**
     * Shortest paths
     * @var array
     */
    private $paths;


    /**
     * FloydWarshall constructor.
     * @param $a
     * @param $b
     */
    public function __construct($a, $b)
    {

        $this->a = $a;
        $this->b = $b;

        $floorSource = (int)($a / 1000);
        $floorDestination = (int)($b / 1000);

        //include './Paths/paths.php';

        $this->paths = json_decode(file_get_contents('ALL_PATHS.txt'));
        $this->id = json_decode(file_get_contents('ALL_IDS.txt'));

//        $this->paths = $floorPaths[$floorSource];
//        $this->id = $ids[$floorSource];
    }

    /**
     * Print shortest path from point a to point b
     * @return array
     */
    public function get_path()
    {
        $p = [];
        foreach ($this->paths[array_search($this->a, $this->id)][array_search($this->b, $this->id)] as $id)
            $p[] = $this->id[$id];
        return ($p);
    }
}