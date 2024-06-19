{{ $slot }}

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-primary rounded">
                <div class="card-header bg-primary text-white text-center">
                    <h2>Contate-nos!</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('site.contato') }}" method="POST" class="{{ $light }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="motivo" class="form-label">Qual o motivo do contato?</label>
                            <select name="motivo" id="motivo" class="form-select" required>
                                <option value="1">Reclamação</option>
                                <option value="2">Dúvida</option>
                                <option value="3">Elogio</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>