<?php

namespace App\Http\Controllers;

use App\Models\variables;
use Illuminate\Http\Request;
use DB;
class VariablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satos=DB::table('variables')
                ->select('variables.*','comunas.nombre_comuna')
                ->join('comunas','variables.id_comuna','=','comunas.id')
                ->get(); 
                return view("dash/table-basic",compact("satos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data=$request->all();
       
        $select=$data["select"];
        $variable1=$data["variable1"];
        $variable2=$data["variable2"];
        $variable3=$data["variable3"];
        $variable4=$data["variable4"];
        $variable5=$data["variable5"];
        $variable6=$data["variable6"];
        $variable7=$data["variable7"];
        $variable8=$data["variable8"];
        $contaminacion=$variable1+$variable2+$variable3+$variable4+$variable5+$variable6+$variable7+$variable8;

        $crear_variable=new variables;
            $crear_variable->id_comuna=$select;
            $crear_variable->variable_1=$variable1;
            $crear_variable->variable_2=$variable2;
            $crear_variable->variable_3=$variable3;
            $crear_variable->variable_4=$variable4;
            $crear_variable->variable_5=$variable5;
            $crear_variable->variable_6=$variable6;
            $crear_variable->variable_7=$variable7;
            $crear_variable->variable_8=$variable8;
            $crear_variable->contaminacion=$contaminacion;
            $crear_variable->save();
            return back()->with('msg', 'Datos Agregados Correctamente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\variables  $variables
     * @return \Illuminate\Http\Response
     */
    public function show(variables $variables)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\variables  $variables
     * @return \Illuminate\Http\Response
     */
    public function edit(variables $variables)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\variables  $variables
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, variables $variables)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\variables  $variables
     * @return \Illuminate\Http\Response
     */
    public function destroy(variables $variables)
    {
        //
    }
    public function dashboard(){
        $satos=DB::table('comunas')
        ->select()
        ->get(); 
        return view('dash/dashboard',compact("satos"));
    }

    public function comuna(){
        $comuna1=self::contaminacion_comuna(1);
        $comuna3=self::contaminacion_comuna(3);
        $datos=array($comuna1, 0, $comuna3, "world");
        return view('dash/map-google',compact("datos"));
    }
    public function contaminacion_comuna($comuna){
        $id= DB::table('variables')
        ->where('id', DB::raw("(select max(`id`) from variables where `id_comuna`=".$comuna." )"))
        ->where('id_comuna','=',$comuna)
        ->get();
        if($id==null){
            return 0;
        }else{
            return $contaminante=$id[0]->contaminacion;
        }
        
    
        
    }
    
}
