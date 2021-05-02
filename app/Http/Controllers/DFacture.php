<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DFacture extends Controller
{
    // 
    function getAll(){

        $t1=DB::select('select * from d_facture');
        return view('detailFacture',["x"=>$t1]);
    }
    


    function supprimerDF($numDF){
        DB::table('d_facture')->where('numDF',$numDF)->delete();
        $t1=DB::select('select * from d_facture');
        return view('cslt_facture',["x"=>$t1]);
    }
    function editFacture(){
        return view('cslt_facture');
    }
    function Dsave(){
        $t1=DB::table('d_facture')->get();
        return view('cslt_facture');
    }
    function saveD(Request $r)
    {
        $t1=DB::select('select * from d_facture');
        $test=0;
        foreach($t1 as $itm){
            if($r->numDF == $itm->numDF)
            {
                $test=1;
            }
        }
        if($test==0)
        {
            DB::table('d_facture')->insert(["numDF"=>$r['numDF'],"numFfk"=>$r['numFfk'],"designation"=>$r['designation'],"unite"=>$r['unite'],"qte"=>$r['qte'],"prixUnite"=>$r['prixUnite'],"prixTotal"=>0]);
        }
        else{
            DB::table('d_facture')->where("numDF",$r->numDF)->update(["numFfk"=>$r["numFfk"], "designation"=>$r["designation"], "unite"=>$r["unite"], "qte"=>$r["qte"],"prixUnite"=>$r["prixUnite"]]);
        } 
        $t2=DB::select('select * from d_facture');
        return view('cslt_facture',["x"=>$t2]);
    }
}
