<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>
        
        <main>
            <div class="header-content">
                <h2>Gestão de notícias</h2>
                <p>Cadastre e gerencie notícias do sistema.</p>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Categoria</th>
                            <th>Resumo</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Título de exemplo</td>
                            <td>Notícias</td>
                            <td>Resumo breve sobre a notícia.</td>
                            <td><span class="badge ativo">Publicado</span></td>
                            <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" align="right"><a href="cadastro.html?entity=noticias"  class="btn-add">Adicionar Notícia</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>
    </div>
    <?php include 'footer.php'; ?>
    
</body>
</html>