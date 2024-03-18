<div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="">Tipo de documento</label>
            <select wire:model="customer_document_type"
                class="form-control @error('customer_document_type') is-invalid @enderror" name="" id="">
                <option value="select">Seleccione una opción</option>
                <option value="DNI">DNI</option>
                <option value="RUC">RUC</option>
            </select>
            @error('customer_document_type')
                <span class="invalid-feedback er" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group col-md-6">
            <label for="">Numero de documento</label>
            <div class="input-group">
                <input type="text" wire:model="customer_document_number"
                    class="form-control @error('customer_document_number') is-invalid @enderror"
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button wire:click="searchCustomer" class="btn btn-outline-secondary" type="button"
                        id="button-addon2">Buscar</button>
                </div>
                @error('customer_document_number')
                    <span class="invalid-feedback er" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="">Nombres</label>
            <input type="text" wire:model="customer_full_name"
                class="form-control @error('customer_full_name') is-invalid @enderror">
            @error('customer_full_name')
                <span class="invalid-feedback er" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>
