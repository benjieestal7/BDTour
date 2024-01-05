using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Linq;
using System.Windows.Forms;
using DevExpress.XtraEditors;
using bdtour.Core;
using bdtour.Dal;

namespace bdtour
{
    public partial class PageCountForm : DevExpress.XtraEditors.XtraForm
    {
        public PageCountForm()
        {
            InitializeComponent();
        }

        DataTable pageCount = new DataTable();
        private void bwGetPageCount_DoWork(object sender, DoWorkEventArgs e)
        {
            pageCount = PageCount.GetPageCountAll();
            bwGetPageCount.CancelAsync();
        }

       
        private void bwGetPageCount_RunWorkerCompleted(object sender, RunWorkerCompletedEventArgs e)
        {
            try
            {
                if (PageCount.GetPageCountAllDataIsSuccessfull && pageCount.Rows.Count > 0)
                {
                    // Assuming you want to access the first row and the "page_count" column
                    object value = pageCount.Rows[0]["count"];

                    if (value != null && value != DBNull.Value)
                    {
                        lblViews.Text = value.ToString() + " view/s";
                    }
                    else
                    {
                        lblViews.Text = "No value found in the 'page_count' column.";
                    }
                }
                else
                {
                    MsgBox.Error("Error loading data! Please check your connection and try again!");
                }
            }
            catch { }

        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            lblViews.Anchor = AnchorStyles.None;
            this.Controls.Add(lblViews);


            // Calculate the center position of the label

            int labelX = (this.ClientSize.Width - lblViews.Width) / 2;
            int labelY = (this.ClientSize.Height - lblViews.Height) / 2;

            // Set the label's location
            lblViews.Location = new Point(labelX, labelY);

            if (!bwGetPageCount.IsBusy) {
                bwGetPageCount.RunWorkerAsync();
            }
        }

        private void PageCountForm_Load(object sender, EventArgs e)
        {
            lblViews.Anchor = AnchorStyles.None;
            this.Controls.Add(lblViews);


            // Calculate the center position of the label

            int labelX = (this.ClientSize.Width - lblViews.Width) / 2;
            int labelY = (this.ClientSize.Height - lblViews.Height) / 2;

            // Set the label's location
            lblViews.Location = new Point(labelX, labelY);
        }

    }
}