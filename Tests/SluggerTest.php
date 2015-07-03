<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Bundle\SlugBundle\Tests;

use Integrated\Bundle\SlugBundle\Slugger\Slugger;

/**
 * @author Ger Jan van den Bosch <gerjan@e-active.nl>
 */
class SluggerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Slugger
     */
    protected $slugger;

    /**
     */
    protected function setUp()
    {
        $this->slugger = new Slugger();
    }

    /**
     */
    public function testSlugifyFunction()
    {
        $this->assertEquals($this->slugger->slugify('This__value _&*";--- is  the slug '), 'this-value-is-the-slug');

        $this->assertEquals($this->slugger->slugify('Another delimiter', '_'), 'another_delimiter');
    }
}
