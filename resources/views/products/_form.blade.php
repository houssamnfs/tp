<div class="mb-3">
    <label for="libelle" class="form-label">Libelle:</label>
    <input type="text" name="libelle" value="{{ $product['libelle'] ?? old('libelle') }}" class="form-control" required>
    @error('libelle')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="marque" class="form-label">Marque:</label>
    <input type="text" name="marque" value="{{ $product['marque'] ?? old('marque') }}" class="form-control" required>
    @error('marque')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="prix" class="form-label">Prix:</label>
    <input type="number" name="prix" value="{{ $product['prix'] ?? old('prix') }}" class="form-control">
    @error('prix')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="stock" class="form-label">Stock:</label>
    <input type="number" name="stock" value="{{ $product['stock'] ?? old('stock') }}" class="form-control" required>
    @error('stock')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="image" class="form-label">Image:</label>
    <input type="file" name="image" accept="image/*" class="form-control">
    @error('image')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>