<?php
class block_helloworld extends block_base {

    public function init() {
        $this->title = get_string('pluginname', 'block_helloworld');
    }

    public function get_content() {
        global $PAGE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        
        // Load our JavaScript module
        $this->page->requires->js_call_amd('block_helloworld/main', 'init');

        
        // Create the form HTML
        $this->content->text = '
            <h4>Hello World, this is coding with nobody</h4>
            <div class="block-helloworld-container">
                <input type="text" id="block_helloworld_input" class="form-control" placeholder="Enter text here">
                <button id="block_helloworld_submit" class="btn btn-primary">Process</button>
                <div id="block_helloworld_output" class="mt-2"></div>
            </div>
        ';
        
        $this->content->footer = '';

        return $this->content;
    }
}