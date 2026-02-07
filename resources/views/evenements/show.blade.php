<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'événement</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="page-event-show">

<h2 class="page-title">Détails de l'événement</h2>

<div class="table-wrapper">
    <table class="details-table">
        <tr>
            <td class="label-cell">Thème</td>
            <td class="value-cell">{{ $evenement->theme }}</td>
        </tr>
        <tr>
            <td class="label-cell">Date début</td>
            <td class="value-cell">{{ $evenement->date_debut }}</td>
        </tr>
        <tr>
            <td class="label-cell">Date fin</td>
            <td class="value-cell">{{ $evenement->date_fin }}</td>
        </tr>
        <tr>
            <td class="label-cell">Description</td>
            <td class="value-cell">{{ $evenement->description }}</td>
        </tr>
        <tr>
            <td class="label-cell">Coût journalier</td>
            <td class="value-cell">{{ $evenement->cout_journalier }}</td>
        </tr>
        <tr>
            <td class="label-cell">Expert</td>
            <td class="value-cell">
                {{ $evenement->expert->nomExp }} {{ $evenement->expert->prenomExp }}
            </td>
        </tr>
    </table>
</div>

<h3 class="section-title">Liste des ateliers assurés</h3>

<div class="table-wrapper">
    <table class="ateliers-table">
        <tr>
            <th class="table-header">Nom de l'atelier</th>
            <th class="table-header">Description</th>
        </tr>

        @foreach($evenement->ateliers as $atelier)
        <tr class="table-row">
            <td class="table-cell">{{ $atelier->nomAtelier }}</td>
            <td class="table-cell">{{ $atelier->descriptionAtelier }}</td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>
