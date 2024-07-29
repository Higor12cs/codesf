<!DOCTYPE html>
<html>

<head>
    <title>Nova mensagem de contato</title>
</head>

<body>
    <p><strong>Nome:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Mensagem:</strong> {{ $messageContent }}</p>
    <p><strong>Horário: </strong>{{ $datetime?->format('d/m/Y H:i') }}</p>
</body>

</html>
