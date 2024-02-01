@extends('admin.app')

@section('content')
    <div class="container mt-4">
        <h1>Edit Thanksgiving</h1>

        <form action="{{ route('admin.update', ['idDetail' => $cardDetail->idThanksGiving]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group" hidden>
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $cardDetail->id }}"
                    readonly>
            </div>

            <div class="form-group">
                <label for="id">Nama</label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $cardDetail->name }}"
                    readonly>
            </div>

            <div class="form-group" hidden>
                <label for="idThanksGiving">ID Thanksgiving</label>
                <input type="text" class="form-control" id="idThanksGiving" name="idThanksGiving"
                    value="{{ $cardDetail->idDetail }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $cardDetail->description }}</textarea>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="isMentor" name="isMentor"
                    {{ $cardDetail->isMentor ? 'checked="checked"' : '' }} value="{{ $cardDetail->isMentor ? 1 : 0 }}">
                <label class="form-check-label" for="isMentor">Is Mentor</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="isLeader" name="isLeader"
                    {{ $cardDetail->isLeader ? 'checked="checked"' : '' }} value="{{ $cardDetail->isLeader ? 1 : 0 }}">
                <label class="form-check-label" for="isLeader">Is Leader</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="isTeam" name="isTeam"
                    {{ $cardDetail->isTeam ? 'checked="checked"' : '' }} value="{{ $cardDetail->isTeam ? 1 : 0 }}">
                <label class="form-check-label" for="isTeam">Is Team</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="isArchived" name="isArchived"
                    {{ $cardDetail->isArchived ? 'checked="checked"' : '' }}
                    value="{{ $cardDetail->isArchived ? 1 : 0 }}">
                <label class="form-check-label" for="isArchived">Is Archived</label>
            </div>

            <label for="image">Image:</label>
            <select name="image" id="image">
                <option value="programer.png" {{ $cardDetail->image === 'programer.png' ? 'selected' : '' }}>Programmer
                </option>
                <option value="analis.png" {{ $cardDetail->image === 'analis.png' ? 'selected' : '' }}>Analis</option>
                <option value="po.png" {{ $cardDetail->image === 'po.png' ? 'selected' : '' }}>Project Owner (PO)
                </option>
                <option value="pm.png" {{ $cardDetail->image === 'pm.png' ? 'selected' : '' }}>Project Manager (PM)
                </option>
                <option value="pg.png" {{ $cardDetail->image === 'pg.png' ? 'selected' : '' }}>Product Owner (PG)
                </option>
                <option value="dev.png" {{ $cardDetail->image === 'dev.png' ? 'selected' : '' }}>Developer</option>
                <option value="ceo.png" {{ $cardDetail->image === 'ceo.png' ? 'selected' : '' }}>CEO</option>
                <option value="gf.png" {{ $cardDetail->image === 'gf.png' ? 'selected' : '' }}>gf</option>
            </select>

            <div class="form-group">
                <label for="textPembukaan">Text Pembukaan</label>
                <textarea class="form-control" id="textPembukaan" name="textPembukaan">{{ $cardDetail->textPembukaan }}</textarea>
            </div>

            <div class="form-group">
                <label for="textKesan">Text Kesan</label>
                <textarea class="form-control" id="textKesan" name="textKesan">{{ $cardDetail->textKesan }}</textarea>
            </div>

            <div class="form-group">
                <label for="textThank">Text thank</label>
                <textarea class="form-control" id="textThank" name="textThank">{{ $cardDetail->textThank }}</textarea>
            </div>

            <div class="form-group">
                <label for="textPenutup">Text penutup</label>
                <textarea class="form-control" id="textPenutup" name="textPenutup">{{ $cardDetail->textPenutup }}</textarea>
            </div>

            <div class="form-group">
                <label for="filePenghargaan">File Penghargaan</label>
                <input type="file" class="form-control" id="filePenghargaan" name="filePenghargaan">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
