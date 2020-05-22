<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class House extends Model
{
    public function supermarket()
    {
        return $this->belongsTo('App\Supermarket');
    }

    public function bus()
    {
        return $this->belongsTo('App\Bus');
    }

    public function citycenter()
    {
        return $this->belongsTo('App\CityCenter');
    }

    public function gym()
    {
        return $this->belongsTo('App\Gym');
    }

    public function metro()
    {
        return $this->belongsTo('App\Metro');
    }

    public function park()
    {
        return $this->belongsTo('App\Park');
    }

    public function pharmacy()
    {
        return $this->belongsTo('App\Pharmacy');
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }


    public function getDistance($lat2,$long2)
    {

        $earthRadius = 6371000;
        $lat1 = $this->latitude;
        $long1 = $this->longitude;

        $dlat = deg2rad($lat2-$lat1);

        $dlong = deg2rad($long2-$long1);


        $a = sin($dlat/2)*sin($dlat/2) + cos(deg2rad($lat1))*cos(deg2rad($lat2))*sin($dlong/2)*sin($dlong/2);

        $c = 2*atan2(sqrt($a),sqrt(1-$a));

        $d = $earthRadius*$c;

        return $d;

    }

    public function closest($aux)
    {

        $table = new Collection;
        $collection = $aux;
        Foreach($collection as $object)
        {
            $d = $this->getDistance($object->latitude,$object->longitude);
            $table->push([$this->id,'object'=>$object->id,'dist'=>$d]);
        }

        $sort = $table->sortBy('dist');

        return $sort->values()->first();


    }

}
