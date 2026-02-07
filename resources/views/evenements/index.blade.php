<!DOCTYPE html>
<html>
<head>
    <title>Event List</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="page-event-index">

<h2 class="page-title">Event List</h2>

@if(session('success'))
    <p class="success-message">{{ session('success') }}</p>
@endif
<div class="table-wrapper">
    <table class="events-table">
        <tr>
            <th class="table-header">Theme</th>
            <th class="table-header">Start Date</th>
            <th class="table-header">End Date</th>
            <th class="table-header">Description</th>
            <th class="table-header">Daily Cost</th>
            <th class="table-header">Expert</th>
            <th class="table-header">Actions</th>
        </tr>

        @foreach($evenements as $event)
        <tr class="table-row">
            <td class="table-cell">{{ $event->theme }}</td>
            <td class="table-cell">{{ $event->date_debut }}</td>
            <td class="table-cell">{{ $event->date_fin }}</td>
            <td class="table-cell">{{ $event->description }}</td>
            <td class="table-cell">{{ $event->cout_journalier }}</td>
            <td class="table-cell">{{ $event->expert_id }}</td>
            <td class="table-cell actions-cell">
                <a class="action-link view-link" href="{{ route('evenements.show', $event->id) }}">
                    View
                </a>

                <a class="action-link edit-link" href="{{ route('evenements.edit', $event->id) }}">
                    Edit
                </a>

                <form action="{{ route('evenements.destroy', $event->id) }}"
                    method="POST"
                    class="inline-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button"
                            onclick="confirm('Are you sure ?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>
