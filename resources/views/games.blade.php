<x-layout>
    <x-slot:heading>
        Liste des jeux
    </x-slot:heading>
    
    <h1>je suis une liste de jeux</h1>



<ul>
    <?php  foreach($games as $game){  ?>
        <li> <x-navigation href="/games/{{$game->Title}}"  :active="request()->is('/games/{{$game->Title}}')">{{$game->Title}}</x-navigation></li>
    <?php } ?>

 </ul> 

</x-layout>
