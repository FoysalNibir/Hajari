@extends('layout')
@section('extrascript')
<script type="text/javascript">
     document.getElementById("names[0]").value = <?php echo ($p1_name);?>;
     document.getElementById("names[1]").value = <?php echo ($p2_name);?>;
     document.getElementById("names[2]").value = <?php echo ($p3_name);?>;
     document.getElementById("names[3]").value = <?php echo ($p4_name);?>;
</script>
@stop
@section('content')
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-6">
        @if(Session::has('status'))
        <div class="callout callout-info mobile">
          <h4>{{Session::get('status')}}</h4>
        </div>
        @endif

@if(Session::has('error'))
        <div class="callout callout-danger mobile">
          <h4>{{Session::get('error')}}</h4>
        </div>
        @endif
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Score Board</h3>
        </div>
      
        <div class="box-body">
          <table class="table table-bordered">
            <tbody>
                <tr>
                  <form role="form" method="post" action="{{route('score.post')}}">
                    {{csrf_field()}}
                      <div class="form-group">
                        <div style="width: 19%; float: left;">
                          <label>Player 1 Score</label>
                          <input type="number" name="scores[0]" class="form-control">
                        </div>
                        <div style="width: 19%; float: left; margin-left: 1%">
                          <label>Player 2 Score</label>
                          <input type="number" name="scores[1]" class="form-control">
                        </div>
                        <div style="width: 19%; float: left; margin-left: 1%">
                          <label>Player 3 Score</label>
                          <input type="number" name="scores[2]" class="form-control">
                        </div>
                        <div style="width: 19%; float: left; margin-left: 1%">
                          <label>Player 4 Score</label>
                          <input type="number" name="scores[3]" class="form-control">
                        </div>
                        <div style="width: 15%; margin-left: 1%; float: left;">
                            <label style="color:white">Player 4 Score</label>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                      <!-- /.box-body -->
                      
                    </form>
                </tr>
                <tr>
                 @forelse($players as $player)
                    <th bgcolor="#D2D6DE" style="width: 20%">{{ $player->player }}</th>
                 @empty
                    <th bgcolor="#D2D6DE" style="width: 20%">Player 1</th>
                    <th bgcolor="#D2D6DE" style="width: 20%">Player 2</th>
                    <th bgcolor="#D2D6DE" style="width: 20%">Player 3</th>
                    <th bgcolor="#D2D6DE" style="width: 20%">Player 4</th>
                 @endforelse    
                    <th bgcolor="#D2D6DE" style="width: 20%">Action</th>             
                </tr>
                @if($p1_scores != '')
                 @for ($i=0; $i < count($p1_scores); $i++)
                      <tr>                                            
                        <td><?php echo e($p1_scores[$i]);?></td>
                        <td><?php echo e($p2_scores[$i]);?></td>
                        <td><?php echo e($p3_scores[$i]);?></td>
                        <td><?php echo e($p4_scores[$i]);?></td>
                        <td><a href="{{route('score.delete',$scores_id[0])}}" class="btn btn-danger btn-sm ad-click-event">Delete</a></td>
                      </tr>
                  @endfor
                @else
                 <tr><br></tr>
                @endif
                  <tr><td></td></tr>
                  <tr>                                            
                    <td bgcolor="#D2D6DE"><b>Total:</b> {{$p1_total}}</td>
                    <td bgcolor="#D2D6DE"><b>Total:</b> {{$p2_total}}</td>
                    <td bgcolor="#D2D6DE"><b>Total:</b> {{$p3_total}}</td>
                    <td bgcolor="#D2D6DE"><b>Total:</b> {{$p4_total}}</td>
                  </tr>
            </tbody>
          </table>
        </div>
     </div>
    </div>
<!-- /.col -->
<div class="col-md-6">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Input/Edit Player Names</h3>
    </div>
<!-- /.box-header -->
    <div class="box-body no-padding">
        @if ($players-> isEmpty())
        <form role="form" method="post" action="{{route('names.post')}}">
            {{csrf_field()}}
            <table class="table">
                <tbody>
                    <tr>
                        <td>Player 1 Name</td>
                        <td>
                            <input type="text" id="names[0]" name="names[0]" class="form-control" placeholder="Player 1 Name">
                        </td>
                    </tr>
                    <tr>
                        <td>Player 2 Name</td>
                        <td>
                            <input type="text" id="names[1]" name="names[1]" class="form-control" placeholder="Player 2 Name">
                        </td>
                    </tr>
                    <tr>
                        <td>Player 3 Name</td>
                        <td>
                            <input type="text" id="names[2]" name="names[2]" class="form-control" placeholder="Player 3 Name">
                        </td>
                    </tr>
                    <tr>
                        <td>Player 4 Name</td>
                        <td>
                            <input type="text" id="names[3]" name="names[3]" class="form-control" placeholder="Player 4 Name">
                        </td>
                    </tr>
                    
                </tbody></table>
              <div class="box-footer" style="float: left;">
                <button type="submit" class="btn btn-primary">Insert</button>
              </div>
            </form>
            <form role="form" method="post" action="{{route('reset')}}">
                {{csrf_field()}}
                <div class="box-footer" style="float: left;">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Reset All</button>
                </div>
            </form>
            <form role="form" method="get" action="{{route('rules')}}">
                {{csrf_field()}}
                <div class="box-footer" style="float: left;">
                    <button type="submit" class="btn btn-success">Game Rules</button>
                </div>
            </form>
        @else
            <form role="form" method="post" action="{{route('names.update')}}">
            {{csrf_field()}}
            <table class="table">
                <tbody>
                    <tr>
                        <td>Player 1 Name</td>
                        <td>
                            <input type="text" id="names[0]" name="names[0]" class="form-control" placeholder="Player 1 Name">
                        </td>
                    </tr>
                    <tr>
                        <td>Player 2 Name</td>
                        <td>
                            <input type="text" id="names[1]" name="names[1]" class="form-control" placeholder="Player 2 Name">
                        </td>
                    </tr>
                    <tr>
                        <td>Player 3 Name</td>
                        <td>
                            <input type="text" id="names[2]" name="names[2]" class="form-control" placeholder="Player 3 Name">
                        </td>
                    </tr>
                    <tr>
                        <td>Player 4 Name</td>
                        <td>
                            <input type="text" id="names[3]" name="names[3]" class="form-control" placeholder="Player 4 Name">
                        </td>
                    </tr>
                    
                </tbody></table>
              <div class="box-footer" style="float: left;">
                <button type="submit" class="btn btn-block btn-info ">Edit Names</button>
              </div>
            </form>
            <form role="form" method="post" action="{{route('reset')}}">
                {{csrf_field()}}
                <div class="box-footer" style="float: left;">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Reset All</button>
                </div>
            </form>
            <form role="form" method="get" action="{{route('rules')}}">
                {{csrf_field()}}
                <div class="box-footer" style="float: left;">
                    <button type="submit" class="btn btn-success">Game Rules</button>
                </div>
            </form>
            @endif
      
    </div>
<!-- /.box-body -->
</div>
@if(Session::has('status'))
        <div class="callout callout-info visible">
          <h4>{{Session::get('status')}}</h4>
        </div>
        @endif

@if(Session::has('error'))
        <div class="callout callout-danger visible">
          <h4>{{Session::get('error')}}</h4>
        </div>
        @endif
<!-- /.box -->
<!-- /.box -->
</div>
<!-- /.col -->
</div>
</section>
@stop