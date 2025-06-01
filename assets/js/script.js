$(document).ready(function() {
    // Calcular idade automaticamente
    $('#data_nasc').on('change', function() {
        const nasc = new Date(this.value);
        const hoje = new Date();
        let idade = hoje.getFullYear() - nasc.getFullYear();
        const m = hoje.getMonth() - nasc.getMonth();
        if (m < 0 || (m === 0 && hoje.getDate() < nasc.getDate())) {
            idade--;
        }
        if (!isNaN(idade) && idade > 0) {
            $('#idade').val(idade);
        } else {
            $('#idade').val('');
        }
    });

    // Adicionar formação acadêmica dinâmica
    $('#addFormacao').click(function() {
        $('#formacoes').append(
            '<div class="row g-2 mb-2"><div class="col"><input type="text" class="form-control" name="formacao[]" placeholder="Ex: Ensino Superior em..."></div></div>'
        );
    });

    // Adicionar experiência profissional dinâmica
    $('#addExperiencia').click(function() {
        $('#experiencias').append(
            '<div class="row g-2 mb-2"><div class="col"><input type="text" class="form-control" name="experiencia[]" placeholder="Ex: Analista de Sistemas na Empresa X"></div></div>'
        );
    });

    // Adicionar referência dinâmica
    $('#addReferencia').click(function() {
        $('#referencias').append(
            '<div class="row g-2 mb-2"><div class="col"><input type="text" class="form-control" name="referencia[]" placeholder="Referência"></div></div>'
        );
    });
});
