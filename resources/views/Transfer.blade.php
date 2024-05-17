@extends('layout.navbar')

@section('menu')
    <div style="width: 600px;" class="pt-5 pb-5 pe-5 position-absolute top-0 end-0">
        <h2 class="header-h pt-4">Transfer</h2>
        <div class="pt-4 mb-3 row">
            <div class="mb-3" style="width: 250px;">
                <label for="" class="form-label">FROM</label>
                <Input type="text" class="form-control" id="" placeholder="type here..."></Input>
            </div>
            <div class="mb-3" style="width: 250px;">
                <label for="" class="form-label">GOING TO</label>
                <Input type="text" class="form-control" id="" placeholder="type here..."></Input>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="mb-3" style="width: 250px;">
                <label for="" class="form-label">PICK UP DATE</label>
                <Input type="date" class="form-control" id="" placeholder="type here..."></Input>
            </div>
            <div class="mb-3" style="width: 250px;">
                <label for="" class="form-label">PICK UP TIME</label>
                <Input type="time" class="form-control" id="" placeholder="type here..."></Input>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="mb-3" style="width: 250px;">
                <label for="" class="form-label">CAR TYPE</label>
                <select class="form-control" id="" placeholder="select car type">
                    <option value="">Car 1</option>
                    <option value="">Car 2</option>
                    <option value="">Car 3</option>
                </select>              
            </div>
        </div>
        <div>
            <div class="d-grid gap-5 d-md-flex">
                <a type="button" class="btn rounded-pill" style="width:100px; height: 40px; color:#fff; background-color:#E8C667;" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/></svg> Back</a>
                <button type="button" class="btn rounded-pill" style="width:150px; height: 40px; color:#fff;background-color:#E8C667;">Search</button>
            </div>
        </div>
    </div>
@endsection