@extends('admin.app')

@section('content')
    <div class="container mt-4">
        <h1>Edit Thanksgiving</h1>

        <form action="{{ route('admin.update', ['idDetail' => $thanksgiving->idDetail]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group" hidden>
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $thanksgiving->id }}"
                    readonly>
            </div>

            <div class="form-group">
                <label for="id">Nama</label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $thanksgiving->name }}"
                    readonly>
            </div>

            <div class="form-group" hidden>
                <label for="idThanksGiving">ID Thanksgiving</label>
                <input type="text" class="form-control" id="idThanksGiving" name="idThanksGiving"
                    value="{{ $thanksgiving->idDetail }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $thanksgiving->description }}</textarea>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="isMentor" name="isMentor"
                    {{ $thanksgiving->isMentor ? 'checked' : '' }}>
                <label class="form-check-label" for="isMentor">Is Mentor</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="isLeader" name="isLeader"
                    {{ $thanksgiving->isLeader ? 'checked' : '' }}>
                <label class="form-check-label" for="isLeader">Is Leader</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="isTeam" name="isTeam"
                    {{ $thanksgiving->isTeam ? 'checked' : '' }}>
                <label class="form-check-label" for="isTeam">Is Team</label>
            </div>

            <label for="image">Image:</label>
            <select name="image" id="image">
                <option value="programer.png" {{ $thanksgiving->image === 'programer.png' ? 'selected' : '' }}>Programmer
                </option>
                <option value="analis.png" {{ $thanksgiving->image === 'analis.png' ? 'selected' : '' }}>Analis</option>
                <option value="po.png" {{ $thanksgiving->image === 'po.png' ? 'selected' : '' }}>Project Owner (PO)
                </option>
                <option value="pm.png" {{ $thanksgiving->image === 'pm.png' ? 'selected' : '' }}>Project Manager (PM)
                </option>
                <option value="pg.png" {{ $thanksgiving->image === 'pg.png' ? 'selected' : '' }}>Product Owner (PG)
                </option>
                <option value="dev.png" {{ $thanksgiving->image === 'dev.png' ? 'selected' : '' }}>Developer</option>
                <option value="ceo.png" {{ $thanksgiving->image === 'ceo.png' ? 'selected' : '' }}>CEO</option>
            </select>

            <!-- Add other form fields as needed -->

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
