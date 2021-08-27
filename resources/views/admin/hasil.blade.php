@if ($jumlah == 0)

    <div class="container align-items-center">
        <div class="center">
            <h1>Belum Ada Voting</h1>
        </div>
    </div>
    
@else
@extends('admin.template')
@section('template-admin')
<main class="main-admin">
    <div class="card-row card-row-admin">
        @foreach ($candidates as $candidate)
        <div class="card" id="card">
            
            <img class="card-image" src="{{ asset('assets/img/'. $candidate->foto) }}">
            
            <div class="card-section-hasil">
                
                <p class="card-kandidat">KANDIDAT {{ $candidate->id }}</p>
                
                <h1 class="presentase">{{ number_format($candidate->user->count()/$jumlah * 100) }}%</h1>
               
                {{-- {{ $candidate->user->count() }} suara --}}

                <div class="down__card" id="down-text">
                    <div class="down-card-text" id="text">
                        <span class="number-vote">231 </span>
                        VOTING
                    </div>
                </div>

                <span class="link-dropdown-icon" id="down-icon"><i class="fas fa-caret-down" id="down-icon"></i></span>

            </div>

        </div>
        
        @endforeach
    </div>

    <script>
        const showDownCard = (iconId,cardId) =>{
            const icon = document.getElementById(iconId),
            card = document.getElementById(cardId)

            if(icon && card){
                icon.addEventListener('click', ()=>{
                    card.classList.toggle('card-hasil')
                })
            }
        }

        showDownCard('down-icon','card')

        const showDownText = (iconId,textId) =>{
            const icon = document.getElementById(iconId),
            text = document.getElementById(textId)

            if(icon && text){
                icon.addEventListener('click', ()=>{
                    text.classList.toggle('text-show')
                })
            }
        }
        showDownText('down-icon','down-text')

        const showText = (iconId,showId) =>{
            const icon = document.getElementById(iconId),
            show = document.getElementById(showId)

            if(icon && show){
                icon.addEventListener('click', ()=>{
                    show.classList.toggle('text')
                })
            }
        }
        showText('down-icon','text')
    </script>
    
</main>
@endsection
@endif
