@extends($_SEFF->_FOLDER_FIX.'.layouts.wrapper')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="m-portlet__head-text">
                                {{@$_PAGETILE}} 
                            </h3>
                        </div>
                        <div class="col-md-8">
                            <form method="{{@$_SEARCHMETHOD}}" action="{{@$_SEARCHACTION}}">
                                {{ csrf_field() }}
                                <?php if(@$_SEARCHBAR !== null):?>
                                    <?php echo @$_SEARCHBAR ;?>
                                <?php endif;?>
                            </form>
                            
                        </div>
                        <div class="col-md-1 text-right">
                            <?php if(@$_ADNEWCONTEN !== null):?>
                                <?php echo @$_ADNEWCONTEN ;?>
                            <?php else:?>
                                <a class="btn m-btn--square  btn-success" href="{{$_ROUTE .'/create'}}">Add New</a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section">
                    <?php
                        if(@$_BEFORETABLE !== null){
                           echo  $_BEFORETABLE;
                        }
                    ?>
                    <div class="m-section__content">  
                        <table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand">
                            <?php if(@$_TILECOLUMNTABLE !== null):?>
                                <?php echo @$_TILECOLUMNTABLE;?>
                            <?php else:?>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <?php 
                                            foreach (@$table as $key => $value) {
                                                echo '<th>'.@$value["label"].'</th>';
                                            }
                                        ?>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            <?php endif;?>
                            <tbody>
                                <?php if(@$_CONTENTTABLE !== null):?>
                                    <?php echo $_CONTENTTABLE?>
                                <?php else:?>
                                <?php
                                    $i = 1;
                                    foreach (@$models as $key_m => $value_m) {
                                        echo '<tr>';
                                        echo '<th scope="row">'.$i.'</th>';
                                        foreach (@$table as $key => $value) {
                                            echo '<td>';
                                            if(@$value["type"] == "link" && @$value[@$value["key"]]!= null){
                                                echo '<a href="'.@$value[@$value["key"]].'">link</a>';
                                            }else if(@$value["type"] == "image"){
                                                echo '<img class="type-image" src="'.@$value[@$value["key"]].'">';
                                            }
                                            else if(@$value["type"] == "option"){
                                                if($value["options"]){
                                                    foreach ($value["options"] as $key_option => $value_option) {
                                                        if(@$value_option[@$value["option_key"]] !== null && @$value_m[@$value["key"]] == @$value_option[$value["option_key"]]){
                                                            echo @$value_option[$value["option_value"]];
                                                        }
                                                    }
                                                } 
                                                
                                            }else{
                                                echo @$value_m[@$value["key"]];
                                            } 
                                            echo '</td>';                                              
                                        }
                                        echo '<td>';
                                        if(@$_BEFOREACTION !== null){
                                           echo  str_replace("%5BID%5D", @$value_m["id"], trim(@$_BEFOREACTION));
                                        }
                                        if(@$_CENTERACTION !== null){
                                           echo str_replace("%5BID%5D", @$value_m["id"], trim(@$_CENTERACTION));
                                        }else{
                                            echo '<a href="'.$_ROUTE.'/edit/'.$value_m["id"].'" style="margin-right:5px;">Edit</a> | <a id="delete-action" title="Xóa" href="javascript:;" data-href="'.$_ROUTE.'/destroy/'.$value_m["id"].'" onclick="return confirm(\'Do you want to delete this item?\');"> Delete</a>'; 
                                        }
                                        if(@$_AFFTERACTION !== null){
                                           echo  str_replace("%5BID%5D", @$value_m["id"], trim(@$_AFFTERACTION));
                                        }
                                        echo '</td>';
                                        echo '</tr>';
                                        $i++;
                                    }
                                ?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                    <?php
                    if(@$_AFFTERTABLE !== null){
                       echo  $_AFFTERTABLE;
                    }
                ?> 
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="text-center">
                                <nav aria-label="Page navigation example">
                                    @if($models instanceof \Illuminate\Pagination\LengthAwarePaginator )
                                       {{$models->links()}}
                                    @endif
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end::Portlet-->
    </div>
</div>

@endsection

@section("js_add")
<script type="text/javascript">
    $("tr td input[type = checkbox]").click(function(){
        var parent = $(this).parents("tr");
        if($(this).is(":checked") == true){
            $(this).parents("td").find("input.apply").val("1");
            
        }else{
            $(this).parents("td").find("input.apply").val("0");
        }
    });
    $(document).ready(function(){
        $("body #delete-action").click(function(){
            var url = $(this).attr("data-href");
            $.ajax({
                type     : "get",
                dataType : 'json',
                url      : url,
                success  : function (r){
                    if(r.status == "success"){
                        if(typeof r._redirect !== undefined && r._redirect){
                            document.location = r._redirect;
                        } else{
                            location.reload();
                        } 
                    }
                    else if(typeof r.message !== undefined && r.message){
                        alert(r.message);
                    }
                    
                }
            });
            return false;
        });
    });
</script>
@stop