@extends('layout')
@section('content')
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Rules of the game</h4>
        </div>
        <div class="box-body">
          <table border=0 class="rounded-list" style="margin-left: 2%">
            <tr>
              <td>
                <ol>
                  <li><p>You need four players to play this game. Also a this app to write names and points.</p></li>
                  <li><p>Any one can start the deal but the winner deals it again after winning.</p></li>
                  <li><p>Every player get 13 cards each making 52 cards total and everyone gets a single card when dealing and giving up to 13 cards each.</p></li>
                  <li><p>Players get a time to arrange their cards in order from higher to the lower. After finishing arrangement, player have to say lock and after saying lock, player can not rearrange the cards again.</p></li>
                  <li><p>When a player finishes his ordering or arranging his cards from Higher to Lower he Calls up.</p></li>
                  <li><p>When the four players are UP the first one from the right of the Dealer who dealt the cards starts to throw the card.</p></li>
                  <li><p>The higher card Value wins or takes all the cards and throws again the next three cards in power order</p></li>
                  <li><p>If a player throws a card and the card is thrown same by another player the second bits the first.</p></li>
                  <li><p>After all the cards are thrown on and taken by the winning players they are then counted, who got how much.</p></li>
                  <li><p>Cards ranging from ACE (A) to 10 (ten) are all 10 points and cards from 9 to 2 are all 5 (five) points. That includes A,K,Q,J,10 are all 10 points worth and 9,8,7,6,5,4,3,2 are all 5 points that makes a game consists of 360 points.</p></li>
                  <li><p>The winner is the one who has collected 1000 points all together after playing many games.</p></li>
                  <li><p>A player can dismiss the game if he gets 5 pairs without any troy or if he dose not get any run.</p></li>
                  <li><p> When a player finishes his ordering or arranging his cards from Higher to Lower he Calls up.</p></li>
                  <li><p>If a player throws a card of lower order First and then the Higher order after than that player has to give back the cards to the winner who had the higher card earlier and he looses the rest of the chances even if he has the highest card among the players.(If its a mistake you can consider and then leave it and follow on with the game).</p></li>
                  <li><p>In the last hand, two pair and all four card color is greater than single pair and three card color respectively.</p></li>
                </ol>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- /.col -->
    <div class="col-md-6">
      <div class="box">
        <div class="box-header">
          <h4 class="box-title">Rules of Higher order to lower order</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-bordered" style="width: 90%; margin: 0 auto;">
            <tbody>
              <tr>
                <td style="width: 50%">
                  <img class="card-img" src="{{asset('cards/clubs_ace.png')}}" alt="Logo" style="margin-left: 5%">
                  <img class="card-img" src="{{asset('cards/hearts_ace.png')}}" alt="Logo" style="margin-left: 0%">
                  <img class="card-img" src="{{asset('cards/diamond_ace.png')}}" alt="Logo" style="margin-left: 0%"></td><td style="width: 50%">
                    <h4 style="float: left; margin-left: 3%">Troy</h4>
                  </td></tr>

                  <tr><td style="width: 50%">
                    <img class="card-img" src="{{asset('cards/diamond_10.png')}}" alt="Logo" style="margin-left: 5%">
                    <img class="card-img" src="{{asset('cards/diamond_9.png')}}" alt="Logo" style="margin-left: 0%">
                    <img class="card-img" src="{{asset('cards/diamond_8.png')}}" alt="Logo" style="margin-left: 0%"></td><td style="width: 50%">
                      <h4 style="float: left; margin-left: 3%">Color Run</h4></td></tr>


                      <tr><td style="width: 50%">
                        <img class="card-img" src="{{asset('cards/club_K.png')}}" alt="Logo" style="margin-left: 5%">
                        <img class="card-img" src="{{asset('cards/diamond_Q.png')}}" alt="Logo" style="margin-left: 0%">
                        <img class="card-img" src="{{asset('cards/spade_J.png')}}" alt="Logo" style="margin-left: 0%"></td><td style="width: 50%">
                          <h4 style="float: left; margin-left: 3%">Run</h4></td></tr>


                          <tr><td style="width: 50%">
                            <img class="card-img" src="{{asset('cards/spade_K.png')}}" alt="Logo" style="margin-left: 5%">
                            <img class="card-img" src="{{asset('cards/spade_6.png')}}" alt="Logo" style="margin-left: 0%">
                            <img class="card-img" src="{{asset('cards/spade_4.png')}}" alt="Logo" style="margin-left: 0%"></td><td style="width: 50%">
                              <h4 style="float: left; margin-left: 3%">Color</h4></td></tr>


                              <tr><td style="width: 50%">
                                <img class="card-img" src="{{asset('cards/heart_Q.png')}}" alt="Logo" style="margin-left: 5%">
                                <img class="card-img" src="{{asset('cards/spade_Q.png')}}" alt="Logo" style="margin-left: 0%">
                                <img class="card-img" src="{{asset('cards/club_9.png')}}" alt="Logo" style="margin-left: 0%"></td><td style="width: 50%">
                                  <h4 style="float: left; margin-left: 3%">Pair</h4></td></tr>


                                  <tr><td style="width: 50%">
                                    <img class="card-img" src="{{asset('cards/heart_k.png')}}" alt="Logo" style="margin-left: 5%">
                                    <img class="card-img" src="{{asset('cards/club_7.png')}}" alt="Logo" style="margin-left: 0%">
                                    <img class="card-img" src="{{asset('cards/diamond_3.png')}}" alt="Logo" style="margin-left: 0%"></td><td>
                                      <h4 style="float: left; margin-left: 3%">INDI or Individuals<br>Or High Card</h4></td></tr>

                                    </tbody>
                                  </table><br>


                                </div>
                                <!-- /.box-body -->
                              </div>
                              <!-- /.box -->
                              <!-- /.box -->
                            </div>
                            <!-- /.col -->
                          </div>
                        </section>
                        @stop