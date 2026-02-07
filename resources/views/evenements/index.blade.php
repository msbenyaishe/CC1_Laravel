@extends('layouts.master')

@section('title', 'Event List')

@section('body-class', 'page-event-index')

@section('content')
<div class="list-container">
    <div class="list-card">
        <header class="list-header">
            <div>
                <h2 class="page-title">Event List</h2>
                <p class="subtitle">Manage and monitor all scheduled event sessions.</p>
            </div>
        </header>

        @if(session('success'))
            <div class="success-alert">
                <span class="alert-icon">✓</span>
                {{ session('success') }}
            </div>
        @endif

        <div class="table-wrapper">
            <table class="events-table">
                <thead>
                    <tr>
                        <th class="table-header">Theme</th>
                        <th class="table-header">Schedule</th>
                        <th class="table-header">Description</th>
                        <th class="table-header">Daily Cost</th>
                        <th class="table-header">Expert</th>
                        <th class="table-header">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($evenements as $event)
                    <tr class="table-row">
                        {{-- Added data-label="Theme" --}}
                        <td class="table-cell font-bold" data-label="Theme">
                            {{ $event->theme }}
                        </td>

                        {{-- Added data-label="Schedule" --}}
                        <td class="table-cell" data-label="Schedule">
                            <div class="date-range">
                                <span>{{ $event->date_debut }}</span>
                                <span class="date-separator">→</span>
                                <span>{{ $event->date_fin }}</span>
                            </div>
                        </td>

                        {{-- Added data-label="Description" --}}
                        <td class="table-cell text-muted text-truncate" data-label="Description">
                            {{ $event->description }}
                        </td>

                        {{-- Added data-label="Daily Cost" --}}
                        <td class="table-cell" data-label="Daily Cost">
                            <span class="cost-badge">${{ number_format($event->cout_journalier, 2) }}</span>
                        </td>

                        {{-- Added data-label="Expert" --}}
                        <td class="table-cell" data-label="Expert">
                            <span class="expert-tag">ID: {{ $event->expert_id }}</span>
                        </td>

                        {{-- Added data-label="Actions" --}}
                        <td class="table-cell actions-cell" data-label="Actions">
                            <a class="btn-icon view-link" href="{{ route('evenements.show', $event->id) }}">
                                View
                            </a>

                            <a class="btn-icon edit-link" href="{{ route('evenements.edit', $event->id) }}">
                                Edit
                            </a>

                            <form action="{{ route('evenements.destroy', $event->id) }}" method="POST" class="inline-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-icon delete-link" onclick="confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection