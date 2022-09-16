<div class="modal fade" id="infoCourse{{$course->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable modal-fullscreen-lg-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <b>Curso: {{$course->title}}</b>
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h5 class="m-2"><b> Descrição:</b>
                    {{$course->description}}</h5> <br>

            </div>
        </div>
    </div>
</div>