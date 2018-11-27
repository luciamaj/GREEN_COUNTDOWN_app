@extends('_layouts.master')

@section('body')
    <!--
    `-.`'.-'
                                     `-.        .-'.
                                  `-.    -./\.-    .-'
                                      -.  /_|\  .-
                                  `-.   `/____\'   .-'.
                               `-.    -./.-""-.\.-      '
                                  `-.  /< (()) >\  .-'
                                -   .`/__`-..-'__\'   .-
                              ,...`-./___|____|___\.-'.,.
                                 ,-'   ,` . . ',   `-,
                              ,-'   ________________  `-,
                                 ,'/____|_____|_____\
                                / /__|_____|_____|___\
                               / /|_____|_____|_____|_\
                              ' /____|_____|_____|_____\
                            .' /__|_____|_____|_____|___\
                           ,' /|_____|_____|_____|_____|_\
,,---''--...___...--'''--.. /../____|_____|_____|_____|_____\ ..--```--...___...--``---,,
                         '../__|_____|_____|_____|_____|___\
    \    )              '.:/|_____|_____|_____|_____|_____|_\               (    /
    )\  / )           ,':./____|_____|_____|_____|_____|_____\             ( \  /(
   / / ( (           /:../__|_____|_____|_____|_____|_____|___\             ) ) \ \
  | |   \ \         /.../|_____|_____|_____|_____|_____|_____|_\           / /   | |
.-.\ \    \ \       '..:/____|_____|_____|_____|_____|_____|_____\         / /    / /.-.
(=  )\ `._.' |       \:./ _  _ ___  ____ ____ _    _ _ _ _ _  _ ___\        | `._.' /(  =)
\ (_)       )       \./  |\/| |__) |___ |___ |___ _X_ _X_  \/  _|_ \       (       (_) /
\    `----'         """"""""""""""""""""""""""""""""""""""""""""""""       `----'    /
 \   ____\__          __ __    _  __ _     _  __ ________    _____        __/____   /
  \ (=\     \        (_ |_ |V||_)|_ |_)   |_|(_ /   |  |    |_  |        /     /-) /
   \_)_\     \       __)|__| ||  |__| \   | |__)\___|__|_   |  _|_      /     /_(_/
        \     \                                                        /     /
         )     )  _                                                _  (     (
        (     (,-' `-..__                                    __..-' `-,)     )
         \_.-''          ``-..____                  ____..-''          ``-._/
          `-._                    ``--...____...--''                    _.-'
              `-.._                                                _..-'
                   `-..__          ALT.ASCII-ART             __..-'
                         ``-..____                  ____..-''
                                  ``--...____...--''
    -->
    <div class="container">
        <h1 id="head">The Green Hope</h1>
        <ul>
            <li><span id="days"></span>days</li>
            <li><span id="hours"></span>Hours</li>
            <li><span id="minutes"></span>Minutes</li>
            <li><span id="seconds"></span>Seconds</li>
        </ul>
        <ul>
            <li><span id="sotto">IED | Via Amatore Sciesa 4 | S7 <br>
            Milano</span></li>
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script>
    const second = 1000,
  minute = second * 60,
  hour = minute * 60,
  day = hour * 24;

let countDown = new Date('December 13, 2018 00:00:00').getTime(),
x = setInterval(function() {

  let now = new Date().getTime(),
      distance = countDown - now;

  document.getElementById('days').innerText = Math.floor(distance / (day)),
    document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
    document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
    document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

  //do something later when date is reached
  //if (distance < 0) {
  //  clearInterval(x);
  //  'IT'S MY BIRTHDAY!;
  //}

}, second)
    </script>
@endsection
