<!DOCTYPE html>
<html>
<head>
    <title>Liste des événements</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="page-event-index">

<h2 class="page-title">Liste des événements</h2>

@if(session('success'))
    <p class="success-message">{{ session('success') }}</p>
@endif
<div class="table-wrapper">
    <table class="events-table">
        <tr>
            <th class="table-header">Thème</th>
            <th class="table-header">Date début</th>
            <th class="table-header">Date fin</th>
            <th class="table-header">Description</th>
            <th class="table-header">Coût journalier</th>
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
                    Consulter
                </a>

                <a class="action-link edit-link" href="{{ route('evenements.edit', $event->id) }}">
                    Modifier
                </a>

                <form action="{{ route('evenements.destroy', $event->id) }}"
                    method="POST"
                    class="inline-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button"
                            onclick="confirm('Are you sure ?')">
                        Supprimer
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>
