<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplx - SKU Management</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
      
        <aside class="sidebar">
            <div class="logo">
                <div class="logo-icon">⬡</div>
                <span class="logo-text">Simplx</span>
                <span class="logo-subtitle">Manufacturing</span>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <span class="nav-item-icon"></span>
                        Dashboard
                    </li>
                    <li class="nav-item active">
                        <span class="nav-item-icon"></span>
                        SKU Management
                    </li>
                    <li class="nav-item">
                        <span class="nav-item-icon"></span>
                        Inventory Management
                    </li>
                    <li class="nav-item">
                        <span class="nav-item-icon"></span>
                        MPL Management
                    </li>
                    <li class="nav-item">
                        <span class="nav-item-icon"></span>
                        Order Records
                    </li>
                </ul>
            </nav>
        </aside>

    
        <main class="main-content">
            <div class="header">
                <h1 class="header-title">SKU Management</h1>
                <p class="header-description">This is the description of what the SKU management will do for the user</p>
            </div>

            <div class="header-actions">
                <button class="btn btn-primary" >New SKU +</button>
            </div>

     
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>SKU</th>
                            <th>Description</th>
                            <th>UOM</th>
                            <th>Pieces</th>
                            <th>Dimensions (L*W*H)</th>
                            <th>Weight</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </main>
    </div>


    <div id="createModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Create SKU</h2>
                <button class="close-btn">&times;</button>
            </div>
            <form id="createForm">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="sku">SKU</label>
                            <input type="text" id="sku" name="sku" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" class="form-control" placeholder="This is the description any more information goes here"></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="uom">UOM</label>
                            <input type="text" id="uom" name="uom" class="form-control" placeholder="Pallet">
                        </div>
                        <div class="form-group">
                            <label for="pieces">Pieces</label>
                            <input type="number" id="pieces" name="pieces" class="form-control" placeholder="4">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Dimensions</label>
                            <div class="dimensions-group">
                                <div class="dimension-field">
                                    <label for="dimension_l">L:</label>
                                    <input type="number" step="0.01" id="dimension_l" name="dimension_l" class="form-control" placeholder="4">
                                </div>
                                <div class="dimension-field">
                                    <label for="dimension_w">W:</label>
                                    <input type="number" step="0.01" id="dimension_w" name="dimension_w" class="form-control" placeholder="4">
                                </div>
                                <div class="dimension-field">
                                    <label for="dimension_h">H:</label>
                                    <input type="number" step="0.01" id="dimension_h" name="dimension_h" class="form-control" placeholder="4">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="weight">Weight</label>
                            <input type="text" id="weight" name="weight" class="form-control" placeholder="70lbs">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel" >Cancel</button>
                    <button type="submit" class="btn btn-create">Create</button>
                </div>
            </form>
        </div>
    </div>


    <div id="editModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">SKU Edit</h2>
                <button class="close-btn">&times;</button>
            </div>
            <form id="editForm">
                <input type="hidden" id="edit_id" name="id">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="edit_sku">SKU</label>
                            <input type="text" id="edit_sku" name="sku" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_description">Description</label>
                            <textarea id="edit_description" name="description" class="form-control" placeholder="This is the description any more information goes here"></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="edit_uom">UOM</label>
                            <input type="text" id="edit_uom" name="uom" class="form-control" placeholder="Pallet">
                        </div>
                        <div class="form-group">
                            <label for="edit_pieces">Pieces</label>
                            <input type="number" id="edit_pieces" name="pieces" class="form-control" placeholder="4">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Dimensions</label>
                            <div class="dimensions-group">
                                <div class="dimension-field">
                                    <label for="edit_dimension_l">L:</label>
                                    <input type="number" step="0.01" id="edit_dimension_l" name="dimension_l" class="form-control" placeholder="4">
                                </div>
                                <div class="dimension-field">
                                    <label for="edit_dimension_w">W:</label>
                                    <input type="number" step="0.01" id="edit_dimension_w" name="dimension_w" class="form-control" placeholder="4">
                                </div>
                                <div class="dimension-field">
                                    <label for="edit_dimension_h">H:</label>
                                    <input type="number" step="0.01" id="edit_dimension_h" name="dimension_h" class="form-control" placeholder="4">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit_weight">Weight</label>
                            <input type="text" id="edit_weight" name="weight" class="form-control" placeholder="70lbs">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel">Cancel</button>
                    <button type="submit" class="btn btn-save">Save</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
