<?php
    function bio(){
        $data=[
            "name" => "Muhammad Aftar Roziq",
            "address" => "Ds.Malasan,Kec.Durenan,Kab.Trenggalek",
            "hobbies" => ["coding","traveling"],
            "is_married" => false,
            "school" => [
                "highSchool" => "SMKN 1 Boyolangu",
                "university" => "not yet"
            ],
            "skills" => [
                "name" => ["programming","badminton"],
                "score" => ["100","80"]
            ]
        ];
        $json=json_encode($data);
        return $json;
    }
    echo bio();
?>