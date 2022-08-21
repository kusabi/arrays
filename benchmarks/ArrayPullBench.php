<?php

namespace Kusabi\Native\Benchmarks;

use function array_set;
use function array_unset;

/**
 * @BeforeMethods({"init"})
 */
class ArrayPullBench extends Bench
{
    protected $array;

    public function benchArrayPullDeep()
    {
        array_unset($this->array, 'a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z');
    }

    public function benchArrayPullShallow()
    {
        array_unset($this->array, 'a');
    }

    public function init()
    {
        $this->array = [];
        array_set($this->array, 'a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z', 'test');
    }
}
