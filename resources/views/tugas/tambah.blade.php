<div class="form-group"> 
   <label class="col-sm-2 control-label">Buat Tugas</label>  

   {!! Form::open(['url'=>'tugas/simpan','class'=>'form-horizontal', 'enctype' => 'multipart/form-data']) !!}        
   @if ($errors->any())     
   <div class="alert alert-danger">         
    <ul>             
     @foreach ($errors->all() as $error)                 
        <li>{{ $error }}</li>            
     @endforeach         
    </ul>     
  </div>  
  @endif 

 <div class="col-sm-5">   
  {!! Form::text('nama_tugas',null,['class'=>'formcontrol','placeholder'=>"nama_tugas"]) !!}  </div>
  <div class="col-sm-5">   
    {!! Form::text('end_date',null,['class'=>'formcontrol','placeholder'=>"mm/dd/yyyy"]) !!}  </div>

    <div class="form-group row mb-0">
      <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
          {{ __('Tambah') }}
        </button>
      </div>
    </div>
    {!! Form::close() !!}
  </div>