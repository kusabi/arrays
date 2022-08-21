<?php

namespace Kusabi\Native\Benchmarks;

use function array_get;
use function array_set;

/**
 * @BeforeMethods({"init"})
 */
class ArrayGetBench extends Bench
{
    protected $array;

    public function benchArrayGetDeep()
    {
        array_get($this->array, 'a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z');
    }

    public function benchArrayGetShallow()
    {
        array_get($this->array, 'a');
    }

    public function init()
    {
        $this->array = [];
        array_set($this->array, 'a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z', 'test');
    }
}
