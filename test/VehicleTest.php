<?php   

use App\Vehicle;
use PHPUnit\Framework\TestCase;

class VehicleTest extends TestCase {

    
    public function test_can_construct_tourism(){

        $tourism= Vehicle::constructTourism();
        
        $expected= 'Tourism Car';

        $response=$tourism->type;

        $this->assertSame($expected,$response);

    }

    public function test_can_construct_motorbike(){

        $vehicle= Vehicle::constructMotorBike();
        
        $expected= 'MotorBike';

        $response=$vehicle->type;

        $this->assertSame($expected,$response);

    }
}


