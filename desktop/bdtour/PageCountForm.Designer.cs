namespace bdtour
{
    partial class PageCountForm
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(PageCountForm));
            this.lblViews = new DevExpress.XtraEditors.LabelControl();
            this.timer1 = new System.Windows.Forms.Timer(this.components);
            this.bwGetPageCount = new System.ComponentModel.BackgroundWorker();
            this.SuspendLayout();
            // 
            // lblViews
            // 
            this.lblViews.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.lblViews.Appearance.Font = new System.Drawing.Font("Microsoft Sans Serif", 48F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblViews.Location = new System.Drawing.Point(281, 86);
            this.lblViews.Name = "lblViews";
            this.lblViews.Size = new System.Drawing.Size(185, 73);
            this.lblViews.TabIndex = 330;
            this.lblViews.Text = "Views";
            // 
            // timer1
            // 
            this.timer1.Enabled = true;
            this.timer1.Interval = 1000;
            this.timer1.Tick += new System.EventHandler(this.timer1_Tick);
            // 
            // bwGetPageCount
            // 
            this.bwGetPageCount.WorkerSupportsCancellation = true;
            this.bwGetPageCount.DoWork += new System.ComponentModel.DoWorkEventHandler(this.bwGetPageCount_DoWork);
            this.bwGetPageCount.RunWorkerCompleted += new System.ComponentModel.RunWorkerCompletedEventHandler(this.bwGetPageCount_RunWorkerCompleted);
            // 
            // PageCountForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(755, 261);
            this.Controls.Add(this.lblViews);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "PageCountForm";
            this.SizeGripStyle = System.Windows.Forms.SizeGripStyle.Hide;
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Page Count";
            this.Load += new System.EventHandler(this.PageCountForm_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private DevExpress.XtraEditors.LabelControl lblViews;
        public System.Windows.Forms.Timer timer1;
        private System.ComponentModel.BackgroundWorker bwGetPageCount;
    }
}