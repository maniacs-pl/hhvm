<?php

interface I {
  const v = 42;
}
class X implements I {}
class A extends X {
  const v = 43;
}

class B extends A {}
class C extends A { const v = 44; }

var_dump(X::v, A::v, B::v, C::v);
