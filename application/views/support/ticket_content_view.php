<?php $this->load->view('_base/header'); ?>

			<div class="title">
				<?php echo $info['title']; ?><br>
				<p class="conv-info">
					Ticket #<?php echo $info['cid']; ?>&nbsp;&nbsp;
					Opened <?php echo $info['openingdate']; ?>&nbsp;&nbsp;
					Status: <?php 
							if($info['status'] == 0){
									echo 'closed (If your issue is not resolved, you can reopen by adding a reply)';
								}else{
									echo 'opening';
								} 
							?>
				</p>
			</div>
			
			<div class="nav">
				<ul>
					<li><a href="">Knowledgebase</a></li>
					<li><a href="<?php echo site_url('support/lists'); ?>">Tickets</a></li>
				</ul>
				<a href="<?php echo site_url('deploy'); ?>"><div class="deploy_new_server"><span>+</span></div></a>
			</div>
			
			<div class="ticket">
			
				<div>
					
					<?php echo form_open(current_url()); ?>
						<textarea type="text" placeholder="Reply..." name="reply" ></textarea><br>
						<button>Post Reply</button>
						<label>
							<input type="file" name="upload" />
							<img src="<?php echo site_url().'static/images/logo28.png'; ?>" />
						</label>
					</form>
				</div>
				
				<div class="title2">Ticket Messages</div>
				
				<?php foreach($result as $row) { ?>
					<div class="<?php echo $row->role== null ? 'message1' : 'message2'; ?>">
						<span><b><?php echo $row->username; ?>&nbsp;</b></span>
						<img class="image2" src="<?php echo $row->role== null ? '' : site_url('static/images/logo29.png'); ?>" />
						<span class="date"><?php echo $row->date; ?></span><br>
						<p class="content"><?php echo $row->content; ?></p>
					</div>
				<?php } ?>
				
			</div>
			
			<?php $this->load->view('_base/footer'); ?>