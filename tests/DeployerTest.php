<?php

namespace luya\deployer\tests;

use PHPUnit\Framework\TestCase;

class DeployerTest extends TestCase
{
    public function testLoadRecipe()
    {
        $recipe = include('../luya.php');

        var_dump($recipe);
    }
}