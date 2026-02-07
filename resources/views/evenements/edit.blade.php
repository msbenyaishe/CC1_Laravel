<!DOCTYPE html>
<html>
<head>
    <title>Edit Event</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="page-event-edit">

<h2 class="page-title">Edit Event</h2>

{{-- Display validation errors --}}
@if ($errors->any())
    <ul class="error-list">
        @foreach ($errors->all() as $error)
            <li class="error-item">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('evenements.update', $evenement->id) }}"
      method="POST"
      class="event-form">
    @csrf
    @method('PUT')

    <label class="form-label">Theme:</label><br>
    <input class="form-input" type="text" name="theme"
           value="{{ old('theme', $evenement->theme) }}"><br><br>

    <label class="form-label">Start Date:</label><br>
    <input class="form-input" type="date" name="date_debut"
           value="{{ old('date_debut', $evenement->date_debut) }}"><br><br>

    <label class="form-label">End Date:</label><br>
    <input class="form-input" type="date" name="date_fin"
           value="{{ old('date_fin', $evenement->date_fin) }}"><br><br>

    <label class="form-label">Description:</label><br>
    <textarea class="form-textarea" name="description">
        {{ old('description', $evenement->description) }}
    </textarea><br><br>

    <label class="form-label">Daily Cost:</label><br>
    <input class="form-input" type="number" step="0.01"
           name="cout_journalier"
           value="{{ old('cout_journalier', $evenement->cout_journalier) }}"><br><br>

    <label class="form-label">Expert:</label><br>
    <select class="form-select" name="expert_id">
        @foreach ($experts as $expert)
            <option value="{{ $expert->id }}"
                {{ $expert->id == $evenement->expert_id ? 'selected' : '' }}>
                {{ $expert->nomExp }} {{ $expert->prenomExp }} ({{ $expert->specialiteExp }})
            </option>
        @endforeach
    </select>
    <br><br>

    <button type="submit" class="primary-button">Update</button>
    <a href="{{ route('evenements.index') }}" class="secondary-link">Cancel</a>
</form>

</body>
</html>
