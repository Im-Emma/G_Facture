<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Facture extends Controller
{
    // 
    function getAll(){

        $t1=DB::select('select * from facture');
        return view('cslt_facture',["x"=>$t1]);
    }
    

    function rechercher(request $r)
    {
        //return $r->input('dateF');
        
        try
        {
        $RnumF = $r->input('numF');
        $RdateF =$r->input('dateF');

        $t = DB::table('facture')->where("numF","like","%$RnumF%")->orWhere("dateF","$RdateF")->get();
        return view('cslt_facture',["x"=>$t]);
        }
        catch(Exception $e)
        {
            return "<h1>facture $RnumF non trouve</h1>";
        }
    }

    function supprimerF($numF){
        DB::table('facture')->where('numF',$numF)->delete();
        $t1=DB::select('select * from facture');
        return view('cslt_facture',["x"=>$t1]);
    }
    function editFacture(){
        return view('editFacture');
    }
    function Psave(){
        $t1=DB::table('facture')->get();
        return view('editFacture');
    }
    function save(Request $r)
    {
        $t1=DB::select('select * from facture');
        $test=0;
        foreach($t1 as $itm){
            if($r->numF == $itm->numF)
            {
                $test=1;
            }
        }
        if($test==0)
        {
            DB::table('facture')->insert(["numF"=>$r['numF'],"objet"=>$r['objet'],"dateF"=>$r['dateF'],"client"=>$r['client'],"tauxTva"=>$r['tauxTva'],"prixHt"=>0,"tva"=>0,"prixTtc"=>0]);
        }
        else{
            DB::table('facture')->where("numF",$r->numF)->update(["objet"=>$r["objet"], "dateF"=>$r["dateF"], "client"=>$r["client"],"tauxTva"=>$r["tauxTva"]]);
        } 
        $t2=DB::select('select * from facture');
        return view('cslt_facture',["x"=>$t2]);
    }
    
}
