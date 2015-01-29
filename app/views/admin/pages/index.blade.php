@extends('admin._layouts.default')

@section('main')

<div id="main-content">
    <h2>Welcome</h2>

<div class="content-box">
            <!-- Start Content Box -->
            <div class="content-box-header">
                <h3>Content box</h3>
                <ul class="content-box-tabs">
                    <li><a href="#tab1" class="default-tab">Table</a></li>
                    <!-- href must be unique and match the id of target div -->
                    <li><a href="#tab2">Forms</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="content-box-content">
                <div class="tab-content default-tab" id="tab1">
                    <table>
                        <thead>
                        <tr>
                            <th>
                                <input class="check-all" type="checkbox" />
                            </th>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                            <th>Column 5</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="bulk-actions align-left">
                                    <select name="dropdown">
                                        <option value="option1">Choose an action...</option>
                                        <option value="option2">Edit</option>
                                        <option value="option3">Delete</option>
                                    </select>
                                    <a class="button" href="#">Apply to selected</a> </div>
                                <div class="pagination"> <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a> <a href="#" class="number" title="1">1</a> <a href="#" class="number" title="2">2</a> <a href="#" class="number current" title="3">3</a> <a href="#" class="number" title="4">4</a> <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a> </div>
                                <!-- End .pagination -->
                                <div class="clear"></div>
                            </td>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>
                                <input type="checkbox" />
                            </td>
                            <td>Lorem ipsum dolor</td>
                            <td><a href="#" title="title">Sit amet</a></td>
                            <td>Consectetur adipiscing</td>
                            <td>Donec tortor diam</td>
                            <td>
                                <!-- Icons -->
                                <a href="#" title="Edit"><img src="/images/icons/pencil.png" alt="Edit" /></a> <a href="#" title="Delete"><img src="/images/icons/cross.png" alt="Delete" /></a> <a href="#" title="Edit Meta"><img src="/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a> </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop