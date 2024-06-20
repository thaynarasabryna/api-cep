<div style="margin-top: 15px;">
    <div class="form-floating mb-3 w-100">
        <input type="text" name="logradouro" id="logradouro" class="form-control" placeholder="Logradouro" value="<?php echo isset($endereco['logradouro']) ? $endereco['logradouro'] : '' ?>"/>
        <label for="logradouro">Logradouro</label>
    </div>
    <div class="form-floating mb-3 w-100">
        <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" value="<?php echo isset($endereco['bairro']) ? $endereco['bairro'] : '' ?>"/>
        <label for="bairro">Bairro</label>
    </div>
    <div class="form-floating mb-3 w-100">
        <input type="text" name="localidade" id="localidade" class="form-control" placeholder="Cidade" value="<?php echo isset($endereco['localidade']) ? $endereco['localidade'] : '' ?>"/>
        <label for="localidade">Cidade</label>
    </div>
    <div class="form-floating mb-3 w-100">
        <input type="text" name="uf" id="uf" class="form-control" placeholder="Estado" value="<?php echo isset($endereco['uf']) ? $endereco['uf'] : '' ?>"/>
        <label for="uf">Estado</label>
    </div>
</div>