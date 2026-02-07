@extends('layouts.master')

@section('title', 'Edit Event')

@section('body-class', 'page-event-edit')

@section('content')
<div class="form-container">
    <div class="form-card">
        <header class="form-header">
            <h2 class="page-title">Edit Event</h2>
            <p class="subtitle">Update the details for the current event session.</p>
        </header>

        {{-- Display validation errors --}}
        @if ($errors->any())
            <div class="error-alert">
                <strong>Whoops! Something went wrong.</strong>
                <ul class="error-list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('evenements.update', $evenement->id) }}" method="POST" class="event-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="theme" class="form-label">Theme</label>
                <input type="text" id="theme" name="theme" class="form-input" 
                       placeholder="e.g. Artificial Intelligence Workshop"
                       value="{{ old('theme', $evenement->theme) }}">
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="date_debut" class="form-label">Start Date</label>
                    <input type="date" id="date_debut" name="date_debut" class="form-input" 
                           value="{{ old('date_debut', $evenement->date_debut) }}">
                </div>

                <div class="form-group">
                    <label for="date_fin" class="form-label">End Date</label>
                    <input type="date" id="date_fin" name="date_fin" class="form-input" 
                           value="{{ old('date_fin', $evenement->date_fin) }}">
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-textarea" rows="4" 
                          placeholder="Briefly describe the event goals...">{{ old('description', $evenement->description) }}</textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="cout_journalier" class="form-label">Daily Cost ($)</label>
                    <input type="number" step="0.01" id="cout_journalier" name="cout_journalier" class="form-input" 
                           value="{{ old('cout_journalier', $evenement->cout_journalier) }}">
                </div>

                <div class="form-group">
                    <label for="expert_id" class="form-label">Assigned Expert</label>
                    <select id="expert_id" name="expert_id" class="form-select">
                        @foreach ($experts as $expert)
                            <option value="{{ $expert->id }}" {{ $expert->id == $evenement->expert_id ? 'selected' : '' }}>
                                {{ $expert->nomExp }} {{ $expert->prenomExp }} ({{ $expert->specialiteExp }})
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-actions">
                <a href="{{ route('evenements.index') }}" class="btn-secondary">Cancel</a>
                <button type="submit" class="btn-primary">Update Event</button>
            </div>
        </form>
    </div>
</div>
@endsection