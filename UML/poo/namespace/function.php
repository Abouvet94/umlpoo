<?php

// function.php

namespace Ipssi;

const PROMO = 'ASID12';

function trim($value) {
    return \trim($value, '/');
}

class Request {
    public function __construct() {
        echo __NAMESPACE__;
    }
}

namespace Ecole\Ipssi\Formation\Test;

function trim($value) {
    return \trim($value, ';');
}

namespace Ecole\Ipssi;

const PROMO = "Hiihihihihihi";