<?php

namespace App\Http\Controllers;

use App\vicidial_list_TMP;
use App\vicidial_log_TMP;
use App\log;
use App\Lists;
use App\Troncal;
use App\Logpredictivo;
use Illuminate\Http\Request;
use DB;
class VicidialListTMPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        return view('vicidial.index');
    }

    public function ventas()
    {
       // $lotes = Lists::orderBy('list_id', 'ASC')->get();
        $lotes = DB::connection('asterisk')->select("SELECT list_id,list_name FROM vicidial_lists WHERE list_id NOT LIKE '8%' ORDER BY list_id ASC"); 
        //dd($lotes);
        return view('sistemas.index',compact('lotes'));
 

    }

    public function cobranza()
    {
       
        $lotes = DB::connection('asterisk')->select("SELECT list_id,list_name FROM vicidial_lists WHERE list_id LIKE '8%' ORDER BY list_id ASC"); 
        //dd($lotes);
        return view('sistemas.cobranza',compact('lotes'));
 

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function pre(Request $request)
    {

        $de = $request->lotes;
        $sacar = $request->lotes2;
        $marca = $request->marca;
       // dd($de);

        $ELINAR = DB::connection('asterisk')->statement
        ("
        TRUNCATE TABLE VENTAS
        
        ");

        $INSERTAR = DB::connection('asterisk')->statement
        ("
       
        INSERT INTO  VENTAS
        SELECT first_name,STATUS FROM vicidial_list WHERE list_id=$de AND STATUS IN ('SALE','SALET','VI','VTI','DNC','NAP')
        
        ");
      
       
        $cantidad = DB::connection('asterisk')->select("SELECT COUNT(STATUS) AS CANTIDAD FROM VENTAS"); 
         
        $status = DB::connection('asterisk')->select("SELECT distinct(STATUS) AS status FROM VENTAS"); 
        $SACR = DB::connection('asterisk')->select("select COUNT(status) as sacar from vicidial_list WHERE list_id='$sacar' 
        AND first_name IN (SELECT first_name FROM VENTAS) 
        AND NOT STATUS IN ('SALE','SALET','VI','VTI','DNC','NAP','CALLBK','$marca','0')"); 
        
        
        //dd($SACR);
        return view('sistemas.pre',compact('cantidad','sacar','marca','status','SACR','de'));
        
    
    }

    public function precobranza(Request $request)
    {

        $de = $request->lotes;
        $sacar = $request->lotes2;
        $marca = $request->marca;
       // dd($de);

        $ELINAR = DB::connection('asterisk')->statement
        ("
        TRUNCATE TABLE CMP
        
        ");

        $INSERTAR = DB::connection('asterisk')->statement
        ("
       
        INSERT INTO  CMP
        SELECT first_name,STATUS FROM vicidial_list WHERE list_id=$de AND STATUS IN ('CMP','CMPT')
        
        ");
      
       
        $cantidad = DB::connection('asterisk')->select("SELECT COUNT(STATUS) AS CANTIDAD FROM CMP"); 
         
        $status = DB::connection('asterisk')->select("SELECT distinct(STATUS) AS status FROM CMP"); 
        $SACR = DB::connection('asterisk')->select("select COUNT(status) as sacar from vicidial_list WHERE list_id='$sacar' 
        AND first_name IN (SELECT first_name FROM CMP) 
        AND NOT STATUS IN ('CMP','CMPT','CALLBK','$marca','0')"); 
        
        
        //dd($SACR);
        return view('sistemas.precobranza',compact('cantidad','sacar','marca','status','SACR','de'));
        
    
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $de = $request->lotes;
        $sacar = $request->lotes2;
        $marca = $request->marca;
        //dd($request);

        $prcesarCerradosAhora = DB::connection('asterisk')->statement
        ("
        UPDATE vicidial_list SET STATUS='$marca' 
        WHERE list_id='$sacar' 
        AND first_name IN (SELECT first_name FROM VENTAS) 
        AND NOT STATUS IN ('SALE','SALET','VI','VTI','DNC','NAP','CALLBK','$marca','0')
        
        ");

        //dd($prcesarCerradosAhora);
        return redirect()->route('ventas')
        ->with('info', ' Loco se Ejecuto con  Éxito');
    }

    public function storecobranza(Request $request)
    {
        $de = $request->lotes;
        $sacar = $request->lotes2;
        $marca = $request->marca;
        //dd($request);

        $prcesarCerradosAhora = DB::connection('asterisk')->statement
        ("
        UPDATE vicidial_list SET STATUS='$marca' 
        WHERE list_id='$sacar' 
        AND first_name IN (SELECT first_name FROM CMP) 
        AND NOT STATUS IN ('CMP','CMPT','CALLBK','$marca','0')
        
        ");

        //dd($prcesarCerradosAhora);
        return redirect()->route('cobranza')
        ->with('info', ' Loco se Ejecuto con  Éxito');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\vicidial_list_TMP  $vicidial_list_TMP
     * @return \Illuminate\Http\Response
     */
    public function show(vicidial_list_TMP $vicidial_list_TMP)
    {
           
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vicidial_list_TMP  $vicidial_list_TMP
     * @return \Illuminate\Http\Response
     */
    public function edit(vicidial_list_TMP $vicidial_list_TMP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vicidial_list_TMP  $vicidial_list_TMP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vicidial_list_TMP $vicidial_list_TMP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vicidial_list_TMP  $vicidial_list_TMP
     * @return \Illuminate\Http\Response
     */
    public function destroy(vicidial_list_TMP $vicidial_list_TMP)
    {
        //
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function log_lis()
    {
        

     /***traer la fecha del ultimo registro ingresado  CONVERT(datetime,max(call_date),103)*/
     $fechamax = DB::connection('logpredictivo')->select("SELECT max(call_date)  as fecha from vicidial_log_MATRIZ"); 
     foreach($fechamax as $fechamaxs){
         $fechamax = $fechamaxs->fecha;
        
     }


    /**consultar los list */
   
     $list = DB::connection('asterisk')->select("SELECT lead_id, first_name as cedula, province as cedula2 , '6' as vd FROM vicidial_list WHERE entry_date > '$fechamax' "); 

 /** consultar los log */
     $log = DB::connection('asterisk')->select("SELECT  call_date, lead_id, list_id, campaign_id, phone_number as telefono, status , '6' as vd  FROM vicidial_log WHERE call_date > '$fechamax'"); 
     

//dd($log);
     /**almacenamos en la tabla del 1.7 los registros consultados - list */
     foreach($list as $listss){
         $listtem = new vicidial_list_TMP();
         $listtem->lead_id = $listss->lead_id;
         $listtem->cedula = $listss->cedula;
         $listtem->cedula2 = $listss->cedula2;
         $listtem->vd = $listss->vd;
         $listtem->save();

     }
 /**almacenamos en la tabla del 1.7 los registros consultados - log */
     foreach($log as $logss){
         $logtem = new vicidial_log_TMP();
         $logtem->call_date = $logss->call_date;
         $logtem->lead_id = $logss->lead_id;
         $logtem->list_id = $logss->list_id;
         $logtem->campaign_id = $logss->campaign_id;
         $logtem->telefono = $logss->telefono;
         $logtem->status = $logss->status;
         $logtem->vd = $logss->vd;
         $logtem->save();

     }

    $procesar_list_log = DB::connection('logpredictivo')->statement
     ("
         INSERT INTO  vicidial_list_MATRIZ 
                 select *
                 from vicidial_list_TMP p
                 where not exists  
                 (select * from dbo.vicidial_list_MATRIZ d 
                 where p.lead_id = d.lead_id
                 and p.cedula = d.cedula
                 and p.vd = d.vd)
                 
         ---------------------------
         INSERT INTO  vicidial_log_MATRIZ
                 select  *
                 from vicidial_log_TMP p
                 where  not exists 
                 (select * from vicidial_log_MATRIZ d
                 where p.lead_id = d.lead_id
                 and p.call_date=d.call_date
                 and p.vd = d.vd)
                 
         --- borra las temporales 
                 DELETE  FROM  vicidial_list_TMP
                 DELETE  FROM  vicidial_log_TMP
         -- insert de las 2 tablas unidas list y log 
     INSERT INTO dbo.vicidial_resumen1 (call_date, lead_id, list_id, campaign_id, cedula, telefono, status, cedula2,vd)		
             select * from (
             select b.call_date,b.lead_id,b.list_id, b.campaign_id, a.cedula, b.telefono,b.status,a.cedula2,a.vd
             from vicidial_list_MATRIZ a INNER JOIN vicidial_log_MATRIZ  b
             ON  a.lead_id  = b.lead_id
             and a.vd =b.vd )  c  
             where not exists 
             (select x.call_date , x.lead_id , x.list_id , x.campaign_id,x.cedula , x.telefono , x.status , x.cedula2 , x.vd 
             from vicidial_resumen1   x 
             where 
             c.lead_id = x.lead_id
             and c.vd=x.vd
             and c.call_date=x.call_date)
     ");
     if ($procesar_list_log=true) {
     echo "listo PROCESA_LIST_Y_LOG";
     }else{
         echo "error PROCESA_LIST_Y_LOG";
     }

     $procesar_telefono = DB::connection('logpredictivo')->statement
     ("
     EXEC PROCESA_TELEFONO '';
     ");
     if ($procesar_list_log=true) {
         echo "listo PROCESA_TELEFONO";
      }else{
         echo "error PROCESA_TELEFONO";
      }
 
     return redirect()->back()
     ->with('info', ' Loco se Ejecuto con  Éxito');

    }


}
