<?php

/**
 * Created by PhpStorm.
 * User: zn
 * Date: 4/22/17
 * Time: 10:36 AM
 */
namespace Tests\AppBundle\Services;

use AppBundle\Services\Trikampis;
use PHPUnit\Framework\TestCase;
//Parašykite klasę trikampis. Realizuokite bent porą metodų (pasirinktinai). Parašykite testus šiems
//metodams ir pratestuokite. Galima naudoti bet kokį karkasą. Pateikti ataskaitą Worde ir atskirus kodo
//failus.
class TrikampisTest extends TestCase
{
    public function testPerimetras()
    {
        $trik = new Trikampis(10,10,10);
        $result = $trik->perimetras();

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(30, $result);
    }

    public function testRusis()
    {
        $trikLygiakrastis = new Trikampis(10,10,10);
        $trikLygiasonis = new Trikampis(10,15,10);
        $trikIvairiakrastis = new Trikampis(10,11,12);
        $trikFail = new Trikampis(15,1,0);

        $result1 = $trikLygiakrastis->rusis();
        $result2 = $trikLygiasonis->rusis();
        $result3 = $trikIvairiakrastis->rusis();
        $result4 = $trikFail->rusis();

        // assert that your calculator added the numbers correctly!
        $this->assertEquals('lygiakrastis', $result1);
        $this->assertEquals('lygiasonis', $result2);
        $this->assertEquals('ivairiakrastis', $result3);
        $this->assertEquals('ne trikampis', $result4);
    }
}