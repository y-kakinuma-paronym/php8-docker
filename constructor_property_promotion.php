<?php
// Constructor property promotion
// https://wiki.php.net/rfc/constructor_promotion

class Point {
    // PHP8
    public function __construct(
        public int $x = 0,
        public int $y = 1,
        public int $z = 2,
    ) {
        print "Point constructor\n";
    }

    // PHP7
    // public int $x;
    // public int $y;
    // public int $z;
    // public function __construct(
    //     int $x = 1,
    //     int $y = 2,
    //     int $z = 3
    // ) {
    //     $this->x = $x;
    //     $this->y = $y;
    //     $this->z = $z;
    // }

    public function showClassParameter() {
        print_r([$this->x, $this->y, $this->z]);
    }
}

$obj = new Point();
$obj->showClassVariable();

?>