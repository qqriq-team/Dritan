
@extends('site.admin.adminapp')
@section('content')
<style>
	.tr-admin{
	height:35px !important;
	}
 table{
  color: white !important;
 }
</style>
<div class="w-100 px-5  mt-5">
    <div class="row justify-content-center">
                        <div class="tab-pane active table-responsive userprof-tab" id="tab1">
                            <table class="table table-bordered table-hover mb-0 text-nowrap mt-sm-5 mt-md-5 mt-xs-5">
                                <thead>
                                    <tr >
                                        <th class='tr-admin'>Id </th>
                                        <th class='tr-admin'>Naslov</th>
                                        <th class='tr-admin'>Kategorija</th>
                                        <th class='tr-admin'>Slika</th>
                                        <th class='tr-admin'>Sadržaj</th>
                                        <th class='tr-admin'>Datum</th>
                                        <th class='tr-admin'>Izmijeni/Obriši</th>
                                    </tr>
                                </thead>
                                                                <tbody>
                                    <tr>
                                        <td>
                                         1
                                        </td>

                                        <td>
                                           Naslov bloga
                                        </td>
                                        <td>
                                           ime kategorije
                                        </td>

                                        <td>
                                            slika
                                        </td>
                                        <td>
                                           kratki sadrzaj
                                        </td>
                                        <td>
                                           datum
                                        </td>
                                      <td>
                                       <div class="blog-options">

                                           <a href="/" class="m-4"><img src="/assets/img/Edit.svg" width="30px" alt=""></a>
                                           <a href="/" class=""><img src="/assets/img/Delete.svg" width="35px" alt=""></a>
                                       </div>


                                        </td>
                                        {{-- <td class="d-flex m-auto">
                                            <a class="btn btn-success btn-sm text-white editP adminButton" href="/cars/{{$car->id}}/edit " data-toggle="tooltip"
                                                data-original-title="Edit"><i class="fa fa-pencil"></i>Uredi</a>
                                                <form  class= "deletecar" action="{{ route('cars.destroy', $car->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm text-white adminButton" type="submit" class="btn btn-danger adminButton">    
                                                            <i class="fa fa-trash-o"></i>Izbrisi
                                                    </button>
                                                </form>
                                            <a class="btn btn-primary btn-sm text-white viewP adminButton"  href="/offer " data-toggle="tooltip"
                                                data-original-title="View"><i class="fa fa-eye"></i> Pogledaj</a>
                                        </td> --}}
                                    </tr>

                                </tbody>
                                <tbody>
                                        {{-- <td class="d-flex m-auto">
                                            <a class="btn btn-success btn-sm text-white editP adminButton" href="/cars/{{$car->id}}/edit " data-toggle="tooltip"
                                                data-original-title="Edit"><i class="fa fa-pencil"></i>Uredi</a>
                                                <form  class= "deletecar" action="{{ route('cars.destroy', $car->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm text-white adminButton" type="submit" class="btn btn-danger adminButton">    
                                                            <i class="fa fa-trash-o"></i>Izbrisi
                                                    </button>
                                                </form>
                                            <a class="btn btn-primary btn-sm text-white viewP adminButton"  href="/offer " data-toggle="tooltip"
                                                data-original-title="View"><i class="fa fa-eye"></i> Pogledaj</a>
                                        </td> --}}
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                   
                  
          
    </div>
</div>
@endsection

