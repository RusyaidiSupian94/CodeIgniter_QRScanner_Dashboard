
<!-- first click here to print -->

<div class="container">
    <div class="jumbotron">
        <h1>Qr Code Generator</h1>
        <p> Generate Qr code with Codeigniter.</p>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Username</th>
            <th>Address</th>
            <th>Email</th>
            <th>Job</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?= $user->user_name ?></td>
            <td><?= $user->user_address ?></td>
            <td><?= $user->user_email ?></td>
            <td><?= $user->user_job ?></td>
        </tr>
        </tbody>
    </table>


        <a href="<?= base_url() ?>qr_code_generate/print_qr/<?= $user->user_id ?>" class="btn btn-success" >Print Qr code</a>

</div>
