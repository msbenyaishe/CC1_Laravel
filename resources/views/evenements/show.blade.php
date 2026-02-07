@extends('layouts.master')

@section('title', 'Event Details')

@section('body-class', 'page-event-show')

@section('content')
<div class="details-container">
    <div class="details-card">
        <header class="details-header">
            <div>
                <h2 class="page-title">{{ $evenement->theme }}</h2>
                <p class="subtitle">Detailed overview of the selected event and its associated workshops.</p>
            </div>
            <div class="header-actions">
                <a href="{{ route('evenements.index') }}" class="btn-secondary">Back to List</a>
                <a href="{{ route('evenements.edit', $evenement->id) }}" class="btn-primary">Edit Event</a>
            </div>
        </header>

        <div class="info-grid">
            <div class="info-item">
                <span class="info-label">Start Date</span>
                <span class="info-value">{{ $evenement->date_debut }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">End Date</span>
                <span class="info-value">{{ $evenement->date_fin }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Daily Cost</span>
                <span class="info-value cost-highlight">${{ number_format($evenement->cout_journalier, 2) }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Assigned Expert</span>
                <span class="info-value expert-link">
                    {{ $evenement->expert->nomExp }} {{ $evenement->expert->prenomExp }}
                </span>
            </div>
            <div class="info-item full-width">
                <span class="info-label">Full Description</span>
                <p class="info-description">{{ $evenement->description }}</p>
            </div>
        </div>

        <hr class="section-divider">

        <h3 class="section-title">Workshops Provided</h3>
        
        <div class="table-wrapper">
            <table class="ateliers-table">
                <thead>
                    <tr>
                        <th class="table-header">Workshop Name</th>
                        <th class="table-header">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($evenement->ateliers as $atelier)
                    <tr class="table-row">
                        <td class="table-cell font-bold">{{ $atelier->nomAtelier }}</td>
                        <td class="table-cell text-muted">{{ $atelier->descriptionAtelier }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="2" class="table-cell empty-state">No workshops assigned to this event yet.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection