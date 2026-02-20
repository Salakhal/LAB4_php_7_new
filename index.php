<?php
require_once 'racine.php';
require_once RACINE . '/service/EtudiantService.php';

// Changement de nom des variables pour éviter la similarité
$manager = new EtudiantService();
$data = $manager->findAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Gestion - Étudiants</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* CSS personnalisé pour se démarquer */
        body {
            background-color: #f8f9fa;
        }
        .main-card {
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }
        .header-title {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 30px;
        }
        .btn-custom {
            border-radius: 8px;
            font-weight: 600;
        }
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 12px;
        }
    </style>
</head>

<body>

<div class="container py-5">
    <h2 class="text-center header-title">Gestion du Personnel Étudiant</h2>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card main-card p-4">
                <h4 class="mb-4">Inscription</h4>
                <form action="controller/addEtudiant.php" method="POST">
                    
                    <div class="mb-3">
                        <label class="form-label">Nom de famille</label>
                        <input type="text" name="nom" class="form-control" placeholder="Ex: Dupont" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Prénom</label>
                        <input type="text" name="prenom" class="form-control" placeholder="Ex: Jean" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ville de résidence</label>
                        <input type="text" name="ville" class="form-control" placeholder="Ex: Casablanca" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Genre</label>
                        <select name="sexe" class="form-select" required>
                            <option value="" selected disabled>Choisir...</option>
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-custom" type="submit">Enregistrer</button>
                        <button class="btn btn-outline-secondary btn-custom" type="reset">Vider</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="table-container shadow-sm">
                <h4 class="mb-4">Liste Actualisée</h4>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#ID</th>
                                <th>Identité</th>
                                <th>Localité</th>
                                <th>Genre</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $e): ?>
                            <tr>
                                <td class="fw-bold">#<?= htmlspecialchars($e->getId()) ?></td>
                                <td><?= htmlspecialchars($e->getNom()) . " " . htmlspecialchars($e->getPrenom()) ?></td>
                                <td><?= htmlspecialchars($e->getVille()) ?></td>
                                <td>
                                    <span class="badge <?= $e->getSexe() == 'M' ? 'bg-info' : 'bg-danger' ?>">
                                        <?= htmlspecialchars($e->getSexe()) ?>
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-danger" 
                                       href="controller/deleteEtudiant.php?id=<?= urlencode($e->getId()) ?>"
                                       onclick="return confirm('Confirmer la suppression ?');">
                                        Supprimer
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>